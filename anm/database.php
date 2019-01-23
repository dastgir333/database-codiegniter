
<!controller--->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vijay extends CI_Controller {

public function index()

{
	$this->load->view('welcome_message');
}
public function add(){
    $this->load->model('ajay');
    $data['users'] = $this->ajay->getData();
   
	$this->load->view('add',$data);
}
}
//


<!model--->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajay extends CI_Model {

public function getData()

{

	$q = $this->db->query("SELECT * FROM users");
	
	return $q->result_array();
}

}
//
<!--add.php--->
    
    <!DOCTYPE html>
<html>
<head>
	<title>this is Add page!</title>
</head>
<body>
<h1 style="color: green;">this is Add page!</h1>

<?php foreach ($users as $user):?>
	
    <table>
    	<tr>
    	<td>
    	<?=$user['firstname']?>	

    	</td>	
    	<td>
    	<?=$user['secondname']?>	

    	</td>	

    	</tr>
      <?php endforeach;?>
    </table>
</body>
</html>