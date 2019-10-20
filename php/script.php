
$sql = "INSERT INTO organisation (organisation_bin, organisation_name, plot_identification,
        date_of_application, supplier_bin, type)
        VALUES
        (:organisation_bin, :organisation_name, :plot_identification,
        :date_of_application, :supplier_bin, :type);";

$date = date("Y/m/d");
// echo $date;
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':organisation_bin' => '123133', ':organisation_name' => 'seddy_farms', ':plot_identification' => 'ACR1234',
                     ':date_of_application' => $date , ':supplier_bin' => 'SIM234244',
                     ':type'=>'grower'));
