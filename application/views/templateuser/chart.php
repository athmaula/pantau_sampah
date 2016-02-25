<?php $this->load->view('templateuser/header'); ?>
<?php $this->load->view('templateuser/sidebar') ?>
<div class="content-wrapper">
  <section class="content">
  <div class="row">
  	<div class="col-xs-12 col-md-7">
  		<section>
  		<div class="text-center">
  			<h3>Grapich Garbage Productvity</h3>
  		</div>
    		<div class="container text-center">
      			<canvas id="weeks" width="300" height="400"></canvas>
    		</div>
    		<br/><br/><br/>
		</section>
		<section>
  		<div class="text-center">
  			<h3>Grapich Garbage Productvity</h3>
  		</div>
    		<div class="container text-center">
      			<canvas id="kind" width="300" height="400"></canvas>
    		</div>
    		<br/><br/><br/>
		</section>
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
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
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