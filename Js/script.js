//chart options
const options = {
    chart: {
        height: 230,
        width: '100%',
        type: 'bar',
        background: '#eee',
        forecolor: '#333'
    },
    series:[{
        name:'customers',
        data: [55012,60034,75056,85078,49191,75623,125451,89067,98789,150010]
    }],
    xaxis: {
        categories: ['New Delhi','Lucknow','Dehradun','Jaipur','Srinagar','Shimla','Chandigarh','Mumbai','Silvassa',' Panaji']
    },
    plotOptions: {
        bar: {
            horizontal: false
        }
    },
    fill: {
        colors: ['#f44336']
    },
    dataLabels: {
        enabled: false
    }
};
//Init chart
const chart = new ApexCharts(document.querySelector('#chart'),options);

//Render chart
chart.render();

//Event
document.querySelector('button').addEventListener('click',() => chart.updateOptions({
    plotOptions: {
        bar: {
            horizontal: true
        }
    }
}))