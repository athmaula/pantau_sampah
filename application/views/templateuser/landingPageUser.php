<?php $this->load->view('navbaruser') ?>

<!--carousel-->
<section class="section-color carousel">
  <div class="row">
    <div class="col-sm-12">
      <div class="container-fluid">
        <div id="tipsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="row tengah">
            <div class="col-xs-offset-2 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-6">
              <div class="carousel-inner" role="listbox" id="item-carousel-infopage">
                <div class="item active">
                  <div class="carousel-content">
                    <div>
                      <h1>What is Pantau Sampah ?</h1>
                      <h4>Pantau Sampah is our project, dedicated to warn people about how dangerous garbage can be.</h4>
                    </div>
                  </div>
                </div>
                <?php foreach ($get as $row) { ?>
                <div class="item">
                  <div class="carousel-content">
                    <div class="col-xs-offset-2 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-8 col-sm-6 col-md-6 col-lg-6">
                      <h1><strong><?php echo $row->title; ?></strong></h1>
                      <h4><?php echo $row->content; ?></strong></h4>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control left" data-slide="prev" href="#tipsCarousel"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="carousel-control right" data-slide="next" href="#tipsCarousel"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>  
</section>
<!--ends of carousel-->
<section class="chart-lines">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="clear: both; text-align: center;">
          <br>
          <img alt="ha" src="<?php echo base_url('asset/img/ha.png')?>" class="col-md-12" height="auto" width="100%">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-xs-4">
          <div class="chart-1" style="clear: both; text-align: center;">
            <img alt="ha" src="<?php echo base_url('asset/img/girl.png')?>" class="col-md-10" height="auto" width="100%">
          </div>
        </div>
        <div class="col-md-8">
          <div class="chart-1">
            <canvas id="weeks" width="90" height="40"></canvas>
          </div>
        </div>
      </div>  
    </div>
</section>
<section class="bar background-image-fixed-2 no-mb color-white text-center">
    <div class="dark-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>"Do you Know, Styrofoam can't straggling.."</h2>
                <p class="lead"> - Fact - </p>
            </div>
        </div>
    </div>
</section>
<section class="chart-bars">
    <div class="container">
      <div class="row">
        <h2 class="text-center">Garbage Productivity Graph</h2>
          <!--Grafik per inputan-->
          <div class="col-md-6 col-md-offset-1">
            <div class="chart-2">
              <canvas id="diagram" width="700" height="400"></canvas>
            </div>
          </div>
      </div>
    </div>
</section>
<!-- end grafik per inputan-->
<section class="bar background-image-fixed no-mb color-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>
<!--grafik jenis sampah-->
<section>
    <div class="container">
      <div class="row">
          <h2 class="text-center">Garbage Type Graph</h2>
          <hr class="primary">
          <div class="col-md-6 col-xs-12 col-md-offset-4">
            <div class="container">
              <canvas id="kind" width="300" height="300"></canvas>
            </div>
          </div>
          <br>
          <div class="col-md-1">
            <div id="js-legend" class="chart-legend"></div>
          </div>
      </div>
    </div>
    <br/><br/>
</section>
<!--end grafik jenis sampah-->
<script>
  var cwResImg = function () {
    var cwBpArry = [1382, 992, 768, 480], //Image breakpoint arrays
        currIndex,
        cwResImgVal = Math.max(screen.width,screen.height),
        hdpi = window.devicePixelRatio > 1 ? window.devicePixelRatio : 1,
        rwdImgId = "rwdimg-"+Math.floor(Math.random()*1000),
        tpl='<img src="{src}" alt="{alt}" title="{title}" id="{rwdImgId}" {attributes}>';

    cwBpArry.push(cwResImgVal);
    cwBpArry.sort(function(a,b){return a-b});

    if(Array.prototype.indexOf){
        currIndex = cwBpArry.indexOf(cwResImgVal) + 1;
    }else{
        for(var i in cwBpArry){
            if(cwBpArry[i] === cwResImgVal){
                currIndex = parseInt(i)+1;
            }
        }        
    }

    cwBpArry[currIndex] = cwBpArry[currIndex] || cwBpArry[currIndex-1];

    var imgWid = Math.max.apply(Math, cwBpArry) <= cwBpArry[currIndex] ? cwBpArry[currIndex-2] : cwBpArry[currIndex];

    return {
        imgWid : imgWid,
        hdpi: hdpi,
        id:rwdImgId,
        rwdImg:function(arg){
            
            var src = arg.src || arguments[0] || '',
                src = src.replace(/\/s\d*\//, '/s'+imgWid * hdpi+'/'), //picasa image size replacing (s340 to device width)
                title = arg.title || arg.alt || arguments[1] || '',
                alt = arg.alt || arg.title || arguments[2] || arguments[1] || '',
                attributes = arg.attr || arguments[3] || '',
                img = tpl.replace('{src}',src).replace('{title}',title).replace('{alt}',alt).replace('{rwdImgId}',rwdImgId).replace('{attributes}',attributes);
        }
    };
  }()

</script>

<script>
var data = {
    labels: ["Your maximum input", "Your minimum input", "Your Average input"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "#42a5f5",
            strokeColor: "#1e88e5",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,  <?php echo $getdata_min->input_sampah; ?> , <?php echo $getdata_avg->input_sampah;?>]
        }
    ]
};

var context = document.getElementById('weeks').getContext('2d');
var clientsChart = new Chart(context).Bar(data,{
  responsive : true,
  scaleShowVerticalLines : true,
});

var data = [
  {
    value: <?php echo $getdata_cnt1->plastic; ?>,
    color:"#F7464A",
    label:"plastic"
  },
  {
    value : <?php echo $getdata_cnt2->paper; ?>,
    color : "#D4CCC5",
    label : "paper"
  },
  {
    value : <?php echo $getdata_cnt3->glass; ?>,
    color : "#9c27b0",
    label : "glass"
  },
  {
    value : <?php echo $getdata_cnt4->logam; ?>,
    color : "#FF8153",
    label : "logam"
  },
  {
    value : <?php echo $getdata_cnt5->leftover; ?>,
    color : "#FFEA88",
    label : "leftover"
  },
  {
    value : <?php echo $getdata_cnt6->other; ?>,
    color : "#4caf50",
    label : "other"
  }
  ];

  var options = {
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
  }

  var ctx = document.getElementById("kind").getContext("2d");
  var kind = new Chart(ctx).Doughnut(data, options);
  document.getElementById('js-legend').innerHTML = kind.generateLegend();

var weekData = {
  labels : [<?php $no=0; foreach ($getdata_input as $row) {
                  $no++;
                  echo $no.',';
                    } ?>],
  datasets : [
    {
      label : "Grapich Garbage Productivity",
      fillColor : "#b2dfdb",
      strokeColor : "#00796b",
      pointColor : "#fff",
      pointStrokeColor : "#004d40",
      data : [<?php foreach ($getdata_input as $row) {
                    echo $row->input_sampah.',';
      } ?>]
    }
  ]
}

var weeks = document.getElementById('diagram').getContext('2d');
new Chart(weeks).Line(weekData,{
  responsive : true,
  scaleShowVerticalLines : true,
});

</script>

        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>-->
        <!--<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>-->


<?php $this->load->view('footer') ?>
