Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Grafik Jabatan Petugas Bank'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah Pegawai dalam Jabatan'
        }
    },
    tooltip: {
        formatter: function() {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});