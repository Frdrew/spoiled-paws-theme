# =========================================================
# NUCLEAR BUILD SCRIPT (Guaranteed Success)
# Builds ZIP OUTSIDE the plugin folder to avoid file locks
# =========================================================

Write-Host "Packaging plugin: mom-dashboard (NUCLEAR MODE)..." -ForegroundColor Cyan

$plugin = "mom-dashboard"
$source = (Get-Location).Path

# Output ZIP lives one level up (NOT inside folder)
$zipName = "spoiled-paws-mom-dashboard.zip"
$zipPath = Join-Path (Split-Path $source -Parent) $zipName

# Temporary build folder
$tempPath = Join-Path $env:TEMP "mom-dashboard-build-$(Get-Date -Format 'yyyyMMddHHmmss')"

# Create temp folder cleanly
New-Item -ItemType Directory -Force -Path $tempPath | Out-Null

# Copy plugin into temp
Copy-Item -Path "$source\*" -Destination $tempPath -Recurse -Force

# Delete any existing ZIP at the parent level
if (Test-Path $zipPath) {
    Remove-Item $zipPath -Force -ErrorAction Ignore
}

# Build ZIP from temp (not locked)
Add-Type -AssemblyName System.IO.Compression.FileSystem
[System.IO.Compression.ZipFile]::CreateFromDirectory($tempPath, $zipPath)

# Cleanup temp
Remove-Item $tempPath -Recurse -Force

Write-Host "Plugin packaged successfully!" -ForegroundColor Green
Write-Host "ZIP created at: $zipPath" -ForegroundColor Yellow

