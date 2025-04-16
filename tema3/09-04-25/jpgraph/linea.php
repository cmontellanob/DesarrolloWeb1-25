<?php 
require_once( "jpgraph/jpgraph.php");
require_once("jpgraph/jpgraph_line.php");
// Some data 
$ydata =  array(1,3, 5,8,15 ,19,21, 23,25,27 ); 

// Create the graph. These two calls  are always required 
$graph =  new Graph(350, 250);
$graph->SetScale( "textlin");

// Create the linear plot 
$lineplot =new LinePlot($ydata); 
$lineplot ->SetColor("red"); 

// Add the plot to the graph 
$graph->Add( $lineplot); 

// Display the graph 
$graph->Stroke();
?>