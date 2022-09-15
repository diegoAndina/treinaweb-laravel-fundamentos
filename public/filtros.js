$(document).ready(function () {
    let inputNome = $("#inputNomeHidden").val();

    for (let index = 0; index < 10; index++) {
        if (inputNome != "") {
            let funcinario0 = $(`.funcionarios:eq(${index})`).text();
            let res = funcinario0.replaceAll(inputNome, () => {
                return `<strong class='bg-success text-white'>${inputNome}</strong>`;
            });
            $(`.funcionarios:eq(${index})`).html(res);
        }
    }
});
