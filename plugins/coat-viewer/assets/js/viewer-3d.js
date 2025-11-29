document.addEventListener("DOMContentLoaded", async () => {
    const root = document.querySelector(".spcv-viewer-root");
    if (!root) return;

    // Load silhouettes from manifest
    const silhouettes = await fetch("/wp-json/spcv/v1/silhouettes")
        .then(r => r.json())
        .catch(() => []);

    if (!silhouettes.length) {
        root.innerHTML = "No silhouettes found. Add SVGs to the plugin folder.";
        return;
    }

    // Default selection = first silhouette
    let current = silhouettes[0];

    // Build dropdown
    let dropdownHTML = `
        <select id="spcv-selector">
            ${silhouettes.map(s => `
                <option value="${s.file}">${s.name}</option>
            `).join('')}
        </select>
    `;

    // Viewer HTML
    let viewerHTML = `
        <div class="spcv-container">
            <img id="spcv-silhouette" class="spcv-silhouette" src="/wp-content/plugins/coat-viewer/assets/images/silhouettes/svg/${current.file}">
            <div class="spcv-view spcv-view-front"></div>
            <div class="spcv-view spcv-view-left" style="display:none;"></div>
            <div class="spcv-view spcv-view-right" style="display:none;"></div>

            <button onclick="spcvRotate('left')">◀</button>
            <button onclick="spcvRotate('right')">▶</button>
        </div>
    `;

    root.innerHTML = dropdownHTML + viewerHTML;

    // Dropdown listener for switching silhouettes
    document.querySelector("#spcv-selector").addEventListener("change", (e) => {
        document.querySelector("#spcv-silhouette").src =
            `/wp-content/plugins/coat-viewer/assets/images/silhouettes/svg/${e.target.value}`;
    });
});
