$(document).ready(function () {
    // $(".inputNome").keyup(function (e) {
    //     $(this).css("text-transform", "lowercase");
    // });
    let inputNome = $("#inputNomeHidden").val();
    let funcinario0;
    for (let index = 0; index < 10; index++) {
        if (inputNome != "") {
            funcinario0 = $(`.funcionarios:eq(${index})`).text();

            let res = funcinario0.replaceAll(inputNome, () => {
                return `<strong class='bg-success text-white'>${inputNome}</strong>`;
            });
            contaLetras(index, res);
        }
    }

    function contaLetras(index, res) {
        let text = [];
        text = text.push(funcinario0);
        $(`.funcionarios:eq(${index})`).html(res);
        console.log(text[index]);
    }
    // for (let index = 0; index < funcinario0.length; index++) {}
    // console.log(inputNome.length);
});
