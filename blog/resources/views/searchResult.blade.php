<!-- saved from url=(0050)https://massbank.eu/MassBank/Result.jsp#resultsEnd -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="author" content="MassBank">
    <meta name="coverage" content="worldwide">
    <meta name="Targeted Geographic Area" content="worldwide">
    <meta name="rating" content="general">
    <meta name="copyright" content="Copyright (c) 2006 MassBank Project">
    <meta name="description" content="Mass Spectrum Search Results">
    <meta name="keywords" content="Results">
    <meta name="revisit_after" content="10 days">

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <title>MassBank | Database | 快速查询结果</title></head>

<body class="msbkFont cursorDefault">


<div class="container">
    <h1>查询结果：</h1>
    <h2>1.某某结构糖苷键：</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        </thead>
        <tbody>
        <tr class="active">
            <th scope="row">1</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="success">
            <th scope="row">3</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="info">
            <th scope="row">5</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="warning">
            <th scope="row">7</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="danger">
            <th scope="row">9</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        </tbody>
    </table>

    <div id="container" style="height: 50%"></div>
    <script type="text/javascript" src="/js/echarts.common.min.js"></script>
    <script type="text/javascript">
        var xx = [];

        var a = { "cname": "tom" };

        for (var i = 0; i <{{$count}}; i++) {

            xx[i] =i;
            xx[i] = i+".0";

        }
        var dom = document.getElementById("container");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            tooltip : {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: '#6a7985'
                    }
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: {{$massToChargeRatio}},
                // data: xx
            },
            yAxis: {
                type: 'value',
                data: {{ $absoluteIntensity }},
            },
            series: [{
                name: '数据1',
                data: {{$massToChargeRatio }},
                type: 'line',
                color: 'green',
                smooth: true,
                label: {
                    normal: {
                        show: true,
                        // position: 'top'
                    }
                },
                areaStyle: {normal: {}},
            }]
        };


        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }
    </script>
</div>

<div class="container">

    <h2>1.某某结构糖苷键：</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
        </thead>
        <tbody>
        <tr class="active">
            <th scope="row">1</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="success">
            <th scope="row">3</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="info">
            <th scope="row">5</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="warning">
            <th scope="row">7</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>

        <tr class="danger">
            <th scope="row">9</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        </tbody>
    </table>

    <div id="container2" style="height: 50%"></div>
    <script type="text/javascript" src="./echarts.common.min.js"></script>
    <script type="text/javascript">
        var dom = document.getElementById("container2");
        var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: '数据1',
                data: [820, 932, 901, 934, 1290, 1330, 1320],
                type: 'line',
                smooth: true
            }, {
                name: '数据2',
                data: [120, 1932, 9101, 934, 1290, 1330, 1320],
                type: 'line',
                smooth: true
            }]
        };
        ;
        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }
    </script>
</div>

</body>

</html>