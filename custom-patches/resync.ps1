# Resync script for Snipe-IT fork
# Run this from the repository root to reset the custom branch on the latest upstream/master
# and re-apply the local patches.

$ErrorActionPreference = "Stop"

Write-Host "Fetching upstream..." -ForegroundColor Cyan
git fetch upstream

Write-Host "Resetting custom branch to upstream/master..." -ForegroundColor Cyan
git checkout -B custom upstream/master

$patches = @(
    "custom-patches\001-printall.patch",
    "custom-patches\002-label.patch",
    "custom-patches\003-hide-components.patch"
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
