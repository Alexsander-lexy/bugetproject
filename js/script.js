document.addEventListener("DOMContentLoaded",function(){

    const btnPrint = document.querySelector(".btn-print");
    const btnRelatorio = document.querySelector(".btn-relatorio");
    var descricao = document.querySelector(".descricao");
    var termos = document.querySelector(".termos");

    btnPrint.addEventListener("click",function(){
        descricao.style.display ='none';
        termos.style.display='block;'
        window.print();
        descricao.style.display ='block';
    }
   );

    btnRelatorio.addEventListener("click",function(){
        descricao.style.display ='block';
        termos.style.display='none';
        window.print();
        termos.style.display ='block';
        }
    );
});

