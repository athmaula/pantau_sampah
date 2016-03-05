<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <section class="content">
  <div class="row">
  	<div class="co-xs-12 col-md-5">
      <div class="box box-primary">
        <div class="box-header">
  			 <h3 class="box-title">Grapich Garbage Productvity</h3>
        </div>
    		<div class="box-body">
      			<canvas id="weeks" width="300" height="400"></canvas>
    		</div>
      </div>
    </div>
  		<div class="col-xs-12 col-md-offset-1 col-md-5">
      <div class="box box-primary">
        <div class="box-header">
    			<h3 class="box-title">Grapich Garbage Productvity</h3>
    		</div>
    		<div class="box-body">
      			<canvas id="kind" width="300" height="400" style="margin-left: 50px"></canvas>
    		</div>
      </div>
  	</div>
  </div>
  </section>
  </div>

<?php $this->load->view('templateuser/footer'); ?>
<script>
var data = {
    labels: ["Maximum your input", "Minimum yout input", "Average your Input"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "#42a5f5",
            strokeColor: "#1e88e5",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $getdata_max->input_sampah; ?>,<?php echo $getdata_min->input_sampah;?>, <?php echo $getdata_avg->input_sampah;?> ]
        }
    ]
};

var context = document.getElementById('weeks').getContext('2d');
var clientsChart = new Chart(context).Bar(data);

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

  var kind = document.getElementById("kind").getContext("2d");
  new Chart(kind).Doughnut(data);

</script>
