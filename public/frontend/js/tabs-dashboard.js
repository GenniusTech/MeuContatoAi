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
let dashboardEl = document.getElementById("dashboard");
let financeiroEl = document.getElementById("financeiro");
let suporteEl = document.getElementById("suporte");
let usuariosEl = document.getElementById("usuarios");


dashboardEl.addEventListener("click", function(){openTab("dashboardtab")}, false);
financeiroEl.addEventListener("click", function(){openTab("financeirotab")}, false);
suporteEl.addEventListener("click", function(){openTab("suportetab")}, false);
usuariosEl.addEventListener("click", function(){openTab("usuariostab")}, false);

