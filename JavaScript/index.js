//window.confirm('Bem-Vindo a Alessandra Rodrigues')
let slider = tns({
    container:".my-slider",
    "slideby" : "1",
    "speed" : 400,
    "nav" : false,
    autoplay : true,
    // autoplay para rodar sozinho, porém não precisaremos de botões

    controls : false,
    autoplayButtonOutput : false,
    // esse reponsive creio é oq deixa a rolagem lateral 
    // Tendo como função a orientação do carrosel e a responsividade
    resposive : {
        1600: {
            items : 4,
            gutter : 20
        },
        1024: {
            items : 3,
            gutter : 20
        },
        768: {
            items : 2,
            gutter : 20
        },
        480: {
            items : 1
        }
    }
})