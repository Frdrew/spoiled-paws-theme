# Build script for custom-order-builder plugin

$ErrorActionPreference = "Stop"

$pluginName = "custom-order-builder"
$zipName = "spoiled-paws-$pluginName.zip"

Write-Host "Packaging plugin: $pluginName..."

# Ensure we are in the correct directory
$root = Get-Location

# Output zip path (same directory)
$zipPath = Join-Path $root $zipName

# Remove existing zip if present
if (Test-Path $zipPath) {
    Remove-Item $zipPath -Force
}

# Exclude PowerShell script and zip itself
$exclude = @(
    "build-plugin.ps1",
    "*.zip"
)

# Create ZIP
Add-Type -AssemblyName System.IO.Compression.FileSystem

function CreateZip($source, $destination) {
    if (Test-Path $destination) {
        Remove-Item $destination -Force
    }
    [System.IO.Compression.ZipFile]::CreateFromDirectory($source, $destination)
}

Write-Host "Creating zip file..."
CreateZip $root $zipPath

Write-Host "Plugin packaged: $zipName"
