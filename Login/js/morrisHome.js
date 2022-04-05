new Morris.Bar({
           element: 'graf1',
       data: [
      { year: '2016', valor: 20, valor1: 60, valor2: 70, valor3: 80 },
      { year: '2017', valor: 50, valor1: 30, valor2: 20, valor3: 80 },
      { year: '2018', valor: 40, valor1: 50, valor2: 50, valor3: 20 },
      { year: '2019', valor: 30, valor1: 20, valor2: 60, valor3: 10 },
      { year: '2020', valor: 20, valor1: 30, valor2: 20, valor3: 90 },
      { year: '2021', valor: 10, valor1: 40, valor2: 10, valor3: 20 }
    ],

    xkey: 'year',
    ykeys: ['valor','valor1','valor2','valor3','valor4'],
    barWidth: 2,
    labels: ['Herramientas' , 'Pinturas' , 'Construccion' , 'Reparaciones' , 'Encargos'],
    resize:true,
    barColors:['#051B66', '#022845' , '#005058' , '#067052' , '#022845']
  });

Morris.Donut({
    element: 'graf2',
    data: [
      {label: "Martillos", value: 12},
      {label: "Destornilladores", value: 30},
      {label: "Palustres", value: 20},
      {label: "Lijas", value: 30}
    ],
    resize:true,
    colors:['#051B66', '#022845' , '#005058' , '#067052'],
    gridTextFamily:'comic sans'
  });