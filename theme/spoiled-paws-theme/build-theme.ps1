# ================================
# BUILD SCRIPT FOR WP THEME
# ================================

Write-Host "Packaging theme: spoiled-paws-desert-fse..."

$themeFolder = Get-Location
$themeName   = Split-Path $themeFolder -Leaf
$parentFolder = Split-Path $themeFolder -Parent

$zipPath = Join-Path $parentFolder "spoiled-paws-desert-fse.zip"

# Remove old zip if exists
if (Test-Path $zipPath) {
    Remove-Item $zipPath -Force
}

try {
    Write-Host "Creating zip file..."
    Add-Type -AssemblyName System.IO.Compression.FileSystem
    [System.IO.Compression.ZipFile]::CreateFromDirectory($themeFolder, $zipPath)

    Write-Host "Theme packaged successfully!"
    Write-Host "ZIP: $zipPath"
}
catch {
    Write-Host "BUILD FAILED:"
    Write-Host $_.Exception.Message
}
