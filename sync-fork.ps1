# Sync fork from upstream
# Fetches the latest upstream Snipe-IT and merges it into the local master branch.

param (
    [switch]$Push
)

$repoRoot = $PSScriptRoot
Set-Location -Path $repoRoot

$ErrorActionPreference = "Stop"

$localChanges = git status --short
if ($localChanges) {
    Write-Error "You have uncommitted local changes. Commit, stash or discard them first.`n$localChanges"
}

$currentBranch = git branch --show-current
if ($currentBranch -ne "master") {
    Write-Host "Switching to master..." -ForegroundColor Cyan
    git checkout master
}

Write-Host "Fetching upstream..." -ForegroundColor Cyan
git fetch upstream

Write-Host "Merging upstream/master into master..." -ForegroundColor Cyan
git merge --no-edit upstream/master
$exitCode = $LASTEXITCODE

$conflicts = git diff --name-only --diff-filter=U

if ($conflicts -or $exitCode -ne 0) {
    Write-Error "Merge conflicts detected. Resolve them manually, then commit.`nConflicting files:`n$conflicts"
}

Write-Host "Merge successful." -ForegroundColor Green

if ($Push) {
    Write-Host "Pushing master to origin..." -ForegroundColor Cyan
    git push origin master
    Write-Host "Done." -ForegroundColor Green
}
