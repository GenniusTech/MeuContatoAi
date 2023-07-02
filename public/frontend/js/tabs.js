function openTab(tabName) {
    let i;
    let tabContent;
    
    tabContent = document.getElementsByClassName("tab-content");
    
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }
    
    document.getElementById(tabName).style.display = "flex";
}


// This needs to DRY'ed up so it can be used with a CMS
let linkEl = document.getElementById("link");
let qrcodeEl = document.getElementById("qrcode");
let dadosEl = document.getElementById("dados");

linkEl.addEventListener("click", function(){openTab("linktab")}, false);
qrcodeEl.addEventListener("click", function(){openTab("qrcodetab")}, false);
dadosEl.addEventListener("click", function(){openTab("dadostab")}, false);

