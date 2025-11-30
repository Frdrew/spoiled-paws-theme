Write-Host "Packaging theme: spoiled-paws-desert-fse..." -ForegroundColor Cyan

$source = Get-Location
$zipName = "spoiled-paws-desert-fse.zip"
$dest = Join-Path $source $zipName

Write-Host "Cleaning old zip if present..."
if (Test-Path $dest) {
    Remove-Item $dest -Force
}

Write-Host "Creating zip file..."
Add-Type -AssemblyName System.IO.Compression.FileSystem

[System.IO.Compression.ZipFile]::CreateFromDirectory($source, $dest)

if (Test-Path $dest) {
    Write-Host "Theme packaged successfully!" -ForegroundColor Green
    Write-Host "File: $dest"
} else {
    Write-Host "❌ BUILD FAILED" -ForegroundColor Red
}
