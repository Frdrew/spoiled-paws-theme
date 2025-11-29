@echo off
setlocal enabledelayedexpansion

echo ================================
echo SPOILED PAWS REPO SCAFFOLD
echo ================================

REM --- Theme Folder Structure ---
mkdir theme
mkdir theme\spoiled-paws-desert-fse
mkdir theme\spoiled-paws-desert-fse\inc
mkdir theme\spoiled-paws-desert-fse\assets
mkdir theme\spoiled-paws-desert-fse\assets\css
mkdir theme\spoiled-paws-desert-fse\assets\js
mkdir theme\spoiled-paws-desert-fse\assets\images
mkdir theme\spoiled-paws-desert-fse\templates
mkdir theme\spoiled-paws-desert-fse\parts
mkdir theme\spoiled-paws-desert-fse\patterns

type nul > theme\spoiled-paws-desert-fse\style.css
type nul > theme\spoiled-paws-desert-fse\functions.php
type nul > theme\spoiled-paws-desert-fse\theme.json

type nul > theme\spoiled-paws-desert-fse\inc\setup.php
type nul > theme\spoiled-paws-desert-fse\inc\enqueue.php
type nul > theme\spoiled-paws-desert-fse\inc\patterns.php

type nul > theme\spoiled-paws-desert-fse\assets\css\transitions.css
type nul > theme\spoiled-paws-desert-fse\assets\js\transitions.js
type nul > theme\spoiled-paws-desert-fse\assets\js\scroll-effects.js
type nul > theme\spoiled-paws-desert-fse\assets\js\coat-card-tilt.js

type nul > theme\spoiled-paws-desert-fse\assets\images\placeholder-hero.jpg
type nul > theme\spoiled-paws-desert-fse\assets\images\placeholder-coat.jpg
type nul > theme\spoiled-paws-desert-fse\assets\images\pattern-adobe.png
type nul > theme\spoiled-paws-desert-fse\assets\images\pattern-turquoise.svg

for %%F in (front-page index page single archive-product single-product cart checkout 404) do (
    type nul > theme\spoiled-paws-desert-fse\templates\%%F.html
)

for %%F in (header footer sidebar hero product-grid) do (
    type nul > theme\spoiled-paws-desert-fse\parts\%%F.html
)

for %%F in (hero-pattern coat-catalog-pattern try-on-viewer-pattern custom-order-cta about-story-pattern) do (
    type nul > theme\spoiled-paws-desert-fse\patterns\%%F.php
)

echo Theme scaffold complete.

REM -----------------------------------
REM --- Plugin: Coat Viewer ---
REM -----------------------------------

mkdir plugins
mkdir plugins\coat-viewer
mkdir plugins\coat-viewer\inc
mkdir plugins\coat-viewer\blocks
mkdir plugins\coat-viewer\blocks\coat-viewer-block
mkdir plugins\coat-viewer\assets
mkdir plugins\coat-viewer\assets\js
mkdir plugins\coat-viewer\assets\css
mkdir plugins\coat-viewer\assets\images
mkdir plugins\coat-viewer\assets\images\silhouettes
mkdir plugins\coat-viewer\assets\images\silhouettes\svg

type nul > plugins\coat-viewer\coat-viewer.php
type nul > plugins\coat-viewer\readme.txt

for %%F in (cpt meta admin rest assets) do (
    type nul > plugins\coat-viewer\inc\%%F.php
)

type nul > plugins\coat-viewer\blocks\coat-viewer-block\block.json
type nul > plugins\coat-viewer\blocks\coat-viewer-block\edit.js
type nul > plugins\coat-viewer\blocks\coat-viewer-block\save.js
type nul > plugins\coat-viewer\blocks\coat-viewer-block\style.css

type nul > plugins\coat-viewer\assets\js\rotator.js
type nul > plugins\coat-viewer\assets\js\viewer-3d.js
type nul > plugins\coat-viewer\assets\js\loader-utils.js
type nul > plugins\coat-viewer\assets\css\viewer.css

for %%F in (
    dachshund-1 retriever-1 poodle-sit poodle-stand terrier-1 dachshund-2
    shepherd-sit shepherd-stand labrador small-terrier
) do (
    type nul > plugins\coat-viewer\assets\images\silhouettes\svg\%%F.svg
)

echo Coat Viewer scaffold complete.

REM -----------------------------------
REM --- Plugin: Custom Order Builder ---
REM -----------------------------------

mkdir plugins\custom-order-builder
mkdir plugins\custom-order-builder\inc
mkdir plugins\custom-order-builder\templates
mkdir plugins\custom-order-builder\assets
mkdir plugins\custom-order-builder\assets\js
mkdir plugins\custom-order-builder\assets\css

type nul > plugins\custom-order-builder\custom-order-builder.php
type nul > plugins\custom-order-builder\readme.txt

for %%F in (form fields woo-hooks emails statuses) do (
    type nul > plugins\custom-order-builder\inc\%%F.php
)

type nul > plugins\custom-order-builder\templates\form-render.php
type nul > plugins\custom-order-builder\templates\order-details.php
type nul > plugins\custom-order-builder\assets\js\form.js
type nul > plugins\custom-order-builder\assets\js\measurements.js
type nul > plugins\custom-order-builder\assets\css\form.css

echo Custom Order Builder scaffold complete.

REM -----------------------------------
REM --- Plugin: Mom Dashboard ---
REM -----------------------------------

mkdir plugins\mom-dashboard
mkdir plugins\mom-dashboard\inc
mkdir plugins\mom-dashboard\templates
mkdir plugins\mom-dashboard\templates\widgets
mkdir plugins\mom-dashboard\assets
mkdir plugins\mom-dashboard\assets\js
mkdir plugins\mom-dashboard\assets\css

type nul > plugins\mom-dashboard\mom-dashboard.php
type nul > plugins\mom-dashboard\readme.txt

for %%F in (admin-page rest stats simplify-admin) do (
    type nul > plugins\mom-dashboard\inc\%%F.php
)

type nul > plugins\mom-dashboard\templates\dashboard.php

for %%F in (orders-widget custom-orders-widget messages-widget stats-widget) do (
    type nul > plugins\mom-dashboard\templates\widgets\%%F.php
)

type nul > plugins\mom-dashboard\assets\js\dashboard.js
type nul > plugins\mom-dashboard\assets\css\dashboard.css

echo Mom Dashboard scaffold complete.

REM -----------------------------------
REM --- Brand Kit ---
REM -----------------------------------

mkdir brand-kit
mkdir brand-kit\logo
mkdir brand-kit\logo\favicon
mkdir brand-kit\patterns
mkdir brand-kit\placeholders

type nul > brand-kit\logo\spoiled-paws-logo.svg
type nul > brand-kit\logo\spoiled-paws-logo-black.svg
type nul > brand-kit\logo\spoiled-paws-logo-white.svg
type nul > brand-kit\colors.md
type nul > brand-kit\typography.md
type nul > brand-kit\patterns\nm-turquoise-pattern.svg
type nul > brand-kit\patterns\desert-sun-pattern.svg
type nul > brand-kit\placeholders\product-placeholder-1.jpg
type nul > brand-kit\placeholders\product-placeholder-2.jpg
type nul > brand-kit\placeholders\dog-placeholder-silhouette.png
type nul > brand-kit\placeholders\fabric-sample-1.jpg

REM --- Build system ---
mkdir build
type nul > build\build-all.sh
type nul > build\generate-favicons.sh
type nul > build\github-actions.yml

echo ================================
echo ALL DONE!
echo Your project structure is ready.
echo ================================
pause
