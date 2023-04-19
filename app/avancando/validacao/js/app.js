import { valida } from './validacao'

const inputs = document.querySelectorAll('input')

inputs.forEach(input => {
    if (input.dataset.tipo === 'preco') {
        SimpleMaskMoney.setMask(input, {
            prefix: 'R$ ',
            fixed: true,
            fractionDigits: 2,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            cursor: 'end'
        })
    }

    input.addEventListener('blur', (evento) => {
        valida(evento.target)
    })
})



//  < !--method: 'GET' é o tipo de requisição que será feita.

//  mode: 'cors' indica que a comunicação será feita entre aplicações diferentes.

//  headers: { 'content-type': 'application/json;charset=utf-8' } diz como que queremos receber as informações da API. -- >
