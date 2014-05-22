jQuery(document).ready(function() {
    //Inicio Mascara Telefone
    jQuery("#telefone").mask("(99) 9999-9999?9").ready(function(event) {
        var target, phone, element;
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        phone = target.value.replace(/\D/g, '');
        element = $(target);
        element.unmask();
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    });
    //Fim Mascara Telefone
    //Inicio Mascara RG
    //jQuery("#rg").mask("99.999.999-*");
    //Fim Mascara CPF
    //Inicio Mascara CPF
    //jQuery("#cpf").mask("999.999.999-99");
    //Fim Mascara CPF
    jQuery("#nascimento , #data").mask("99/99/9999");
    //Fim Mascara nascimento
    jQuery("#cep").mask("99999-999");
    //Fim Mascara cep
});

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}