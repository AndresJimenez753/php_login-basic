var ctx=document.getElementById("graf").getContext("2d");
var graf = new Chart(ctx, {
    type:"bar",
    data:{
    labels:['Herramientas' , 'Pinturas' , 'Construccion' , 'Reparaciones' , 'Encargos'],
    datasets:[{
        label: 'Tipos de Productos',
        data:[60,80,70,50,20],
        backgroundColor:['#051B66', '#022845' , '#005058' , '#067052' , '#022845']
    }]
},
options:{
    scales:{
        yAxes:[{
            ticks:{
                beginAtZero:true
            }
        }]
    }
    }
});

var ctx=document.getElementById("graf1").getContext("2d");
var graf1 = new Chart(ctx, {
    type:"pie",
data: {
    labels:['Martillos', 'Destornilladores','Palustres','Lijas'],
        datasets: [{
            label: 'Datos Producto',
            data: [18, 20, 30,25],
            backgroundColor:['#051B66', '#022845' , '#005058' , '#067052']
        }],
}
    });



