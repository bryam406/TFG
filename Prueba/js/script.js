
function inicio(){
       
        const $elementoParaConvertir = document.getElementById("pagina"); // <-- Aquí puedes elegir cualquier elemento del DOM
        html2pdf()
            .set({
                margin: 1,
                filename: 'recibo.pdf',
                image: {
                    type: 'jpeg',
                    quality:3
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,

                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'portrait' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));

   

} 

