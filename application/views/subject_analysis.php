<!DOCTYPE html>
<?=$head?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="mainSearchForm" onsubmit="return false;" action="/login">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <h4 class="section-heading" style="color: #000; text-align: center;">USER LOGIN</h4>
                            <div class="col-md-12">
                            <div class="form-group">

                                <input class="form-control" placeholder="username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="password">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">

                                <button style="background-color: #2c3e50; color: #fff; float:right;" type="submit" class="btn">LOGIN</button>
                            </div>
                        </div>
                        </div>


                                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row" style="padding: 20px;">

            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php echo $left; ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

                <h4>Subject Analysis for <strong>Design and Analysis of Algorithm</strong></h4>
                <div class="col-md-12">
                    <h6>Total Appeared Students: <?php echo $totalAttempts; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Minimum Internal Marks Scored: <?php echo $minInternalScore[0]['internal']; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Minimum External Marks Scored: <?php echo $minExternalScore[0]['external']; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Average Internal Marks: <?php echo $avgInternalScore[0]['internal']; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Average External Marks: <?php echo $avgExternalScore[0]['external']; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Maximum Internal Marks Scored: <?php echo $maxInternalScore[0]['internal']; ?></h6>
                </div>
                <div class="col-md-6">
                    <h6>Maximum External Marks Scored: <?php echo $maxExternalScore[0]['external']; ?></h6>
                </div>
<br>
<h6>Internal Score Analysis</h6>
<svg id="internalVisualisation" width="1000" height="500"></svg>
<br>
<h6>External Score Analysis</h6>
    <svg id="externalVisualisation" width="1000" height="500"></svg>
          </div>
<br>
<div style="width: 100%;" id="chart"></div>

    </div>
</div>


<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script>
InitChart();

function InitChart() {

  var lineData = [	<?php foreach ($internalScores as $key => $value) {
			echo "{'x': ";
			echo $value['internal'];
			echo ", 'y' : ";
			echo $value['numberOfStudents'];
			echo "},";
		} ?>];

  var vis = d3.select("#internalVisualisation"),
    WIDTH = 800,
    HEIGHT = 400,
    MARGINS = {
      top: 20,
      right: 20,
      bottom: 20,
      left: 50
    },
    xRange = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([d3.min(lineData, function (d) {
        return d.x;
      }),
      d3.max(lineData, function (d) {
        return d.x;
      })
    ]),

    yRange = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([d3.min(lineData, function (d) {
        return d.y;
      }),
      d3.max(lineData, function (d) {
        return d.y;
      })
    ]),

    xAxis = d3.svg.axis()
      .scale(xRange)
      .tickSize(5)
      .tickSubdivide(true),

    yAxis = d3.svg.axis()
      .scale(yRange)
      .tickSize(5)
      .orient("left")
      .tickSubdivide(true);


  vis.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + (HEIGHT - MARGINS.bottom) + ")")
    .call(xAxis);

  vis.append("svg:g")
    .attr("class", "y axis")
    .attr("transform", "translate(" + (MARGINS.left) + ",0)")
    .call(yAxis);

  var lineFunc = d3.svg.line()
  .x(function (d) {
    return xRange(d.x);
  })
  .y(function (d) {
    return yRange(d.y);
  })
  .interpolate('linear');

vis.append("svg:path")
  .attr("d", lineFunc(lineData))
  .attr("stroke", "blue")
  .attr("stroke-width", 2)
  .attr("fill", "none");

}
</script>
<script>
InitChart();

function InitChart() {

  var lineData = [	<?php foreach ($externalScores as $key => $value) {
			echo "{'x': ";
			echo $value['external'];
			echo ", 'y' : ";
			echo $value['numberOfStudents'];
			echo "},";
		} ?>];

  var vis = d3.select("#externalVisualisation"),
    WIDTH = 800,
    HEIGHT = 400,
    MARGINS = {
      top: 20,
      right: 20,
      bottom: 20,
      left: 50
    },
    xRange = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([d3.min(lineData, function (d) {
        return d.x;
      }),
      d3.max(lineData, function (d) {
        return d.x;
      })
    ]),

    yRange = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([d3.min(lineData, function (d) {
        return d.y;
      }),
      d3.max(lineData, function (d) {
        return d.y;
      })
    ]),

    xAxis = d3.svg.axis()
      .scale(xRange)
      .tickSize(5)
      .tickSubdivide(true),

    yAxis = d3.svg.axis()
      .scale(yRange)
      .tickSize(5)
      .orient("left")
      .tickSubdivide(true);


  vis.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + (HEIGHT - MARGINS.bottom) + ")")
    .call(xAxis);

  vis.append("svg:g")
    .attr("class", "y axis")
    .attr("transform", "translate(" + (MARGINS.left) + ",0)")
    .call(yAxis);

  var lineFunc = d3.svg.line()
  .x(function (d) {
    return xRange(d.x);
  })
  .y(function (d) {
    return yRange(d.y);
  })
  .interpolate('linear');

vis.append("svg:path")
  .attr("d", lineFunc(lineData))
  .attr("stroke", "blue")
  .attr("stroke-width", 2)
  .attr("fill", "none");

}
</script>
<script>
     (function(d3) {
       'use strict';

       var dataset = [
         { label: 'Abulia', count: 10 },
         { label: 'Betelgeuse', count: 20 },
         { label: 'Cantaloupe', count: 30 },
         { label: 'Dijkstra', count: 40 }
       ];

       var width = 360;
       var height = 360;
       var radius = Math.min(width, height) / 2;

       var color = d3.scale.category20b();

       var svg = d3.select('#chart')
         .append('svg')
         .attr('width', width)
         .attr('height', height)
         .append('g')
         .attr('transform', 'translate(' + (width / 2) +
           ',' + (height / 2) + ')');

       var arc = d3.svg.arc()
         .outerRadius(radius);

       var pie = d3.layout.pie()
         .value(function(d) { return d.count; })
         .sort(null);

       var path = svg.selectAll('path')
         .data(pie(dataset))
         .enter()
         .append('path')
         .attr('d', arc)
         .attr('fill', function(d, i) {
           return color(d.data.label);
         });

     })(window.d3);
   </script>

</body>
</html>
