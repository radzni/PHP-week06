<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];
    
    $s = ($side1 + $side2 + $side3) / 2;
    
    $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
    
    $area = $areaSquared ** 0.5;
    
    $formattedArea = number_format($area, 2);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="post" action="">
        Side 1: <input type="number" name="side1" step="0.01" required><br>
        Side 2: <input type="number" name="side2" step="0.01" required><br>
        Side 3: <input type="number" name="side3" step="0.01" required><br>
        <input type="submit" value="Calculate Area">
    </form>
    
    <?php if (isset($formattedArea)) { ?>
        <h3>Calculated Area: <?php echo $formattedArea; ?> square units</h3>
    <?php } ?>
</body>
</html>