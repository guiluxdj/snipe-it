# Resync script for Snipe-IT fork
# Resets the custom branch on the latest upstream/master and re-applies the local patches.

$ErrorActionPreference = "Stop"

# Move to the repository root, wherever the script was launched from
$repoRoot = Resolve-Path -Path "$PSScriptRoot\.."
Set-Location -Path $repoRoot

Write-Host "Working in $repoRoot" -ForegroundColor Cyan

Write-Host "Fetching upstream..." -ForegroundColor Cyan
git fetch upstream

$localChanges = git status --short
if ($localChanges) {
    Write-Error "You have uncommitted local changes. Commit, stash or discard them before running resync.`n$localChanges"
}

Write-Host "Resetting custom branch to upstream/master..." -ForegroundColor Cyan
git checkout -B custom upstream/master

$patchDir = Join-Path -Path $repoRoot -ChildPath "custom-patches"
$patches = @(
    Join-Path -Path $patchDir -ChildPath "001-printall.patch",
    Join-Path -Path $patchDir -ChildPath "002-label.patch",
    Join-Path -Path $patchDir -ChildPath "003-hide-components.patch"
)

foreach ($patch in $patches) {
    if (-not (Test-Path $patch)) {
        Write-Warning "Patch not found: $patch"
        continue
    }

    Write-Host "Checking $patch..." -ForegroundColor Cyan
    $check = git apply --check $patch 2>&1
    if ($LASTEXITCODE -ne 0) {
        Write-Error "Patch $patch does not apply cleanly. Resolve conflicts manually before continuing. Details: $check"
    }

    Write-Host "Applying $patch..." -ForegroundColor Cyan
    git apply $patch
}

Write-Host "Custom branch ready. Review changes and commit when ready." -ForegroundColor Green
