<?php
$user_info = get_userdata($current_user->data->ID);
$user_meta = get_user_meta($current_user->data->ID);

$updateaDate = isset($user_meta['update_date']) ?$user_meta['update_date'][0]:"Update Your Profile";

if (!isset($user_meta['rs_address1'])) {
    $user_meta['rs_address1'][0] = "";
    $user_meta['rs_address2'][0] = "";
    $user_meta['rs_state'][0] = "";
    $user_meta['rs_city'][0] = "";
    $user_meta['rs_pin'][0] = "";
    $user_meta['ps_address1'][0] = "";
    $user_meta['ps_address2'][0] = "";
    $user_meta['ps_state'][0] = "";
    $user_meta['ps_city'][0] = "";
    $user_meta['ps_pin'][0] = "";
    $user_meta['college_state'][0] = "";
    $user_meta['college_city'][0] = "";
    $user_meta['college_name'][0] = "";
    $user_meta['qualification'][0] = "";
    $user_meta['passing_year'][0] = "";
    $user_meta['percentage'][0] = "";
    $user_meta['ex_percent'][0] = "";
    $user_meta['hasexp'][0] = "";
    $user_meta['ex_years'][0] = "";
    $user_meta['ex_months'][0] = "";
    $user_meta['city_of_work'][0] = "";
    $user_meta['relocateable'][0] = "No";
    $user_meta['degrees'][0] = "1";
    $user_meta['skills'][0] = "1";

}
if(!isset($user_meta['cv'])){
  $user_meta['cv'][0] = "";
}

$list = array(
    'Andaman and Nicobar' => array(
        'North and Middle Andaman', 'South Andaman', 'Nicobar'
    ),
    'Andhra Pradesh' => array(
        'Adilabad', 'Anantapur', 'Chittoor', 'East Godavari', 'Guntur', 'Hyderabad', 'Kadapa', 'Karimnagar', 'Khammam', 'Krishna', 'Kurnool', 'Mahbubnagar', 'Medak', 'Nalgonda', 'Nellore', 'Nizamabad', 'Prakasam', 'Rangareddi', 'Srikakulam', 'Vishakhapatnam', 'Vizianagaram', 'Warangal', 'West Godavari'
    ),
    'Arunachal Pradesh' => array(
        'Anjaw', 'Changlang', 'East Kameng', 'Lohit', 'Lower Subansiri', 'Papum Pare', 'Tirap', 'Dibang Valley', 'Upper Subansiri', 'West Kameng'
    ),
    'Assam' => array(
        'Barpeta', 'Bongaigaon', 'Cachar', 'Darrang', 'Dhemaji', 'Dhubri', 'Dibrugarh', 'Goalpara', 'Golaghat', 'Hailakandi', 'Jorhat', 'Karbi Anglong', 'Karimganj', 'Kokrajhar', 'Lakhimpur', 'Marigaon', 'Nagaon', 'Nalbari', 'North Cachar Hills', 'Sibsagar', 'Sonitpur', 'Tinsukia'
    ),
    'Bihar' => array(
        'Araria', 'Aurangabad', 'Banka', 'Begusarai', 'Bhagalpur', 'Bhojpur', 'Buxar', 'Darbhanga', 'Purba Champaran', 'Gaya', 'Gopalganj', 'Jamui', 'Jehanabad', 'Khagaria', 'Kishanganj', 'Kaimur', 'Katihar', 'Lakhisarai', 'Madhubani', 'Munger', 'Madhepura', 'Muzaffarpur', 'Nalanda', 'Nawada', 'Patna', 'Purnia', 'Rohtas', 'Saharsa', 'Samastipur', 'Sheohar', 'Sheikhpura', 'Saran', 'Sitamarhi', 'Supaul', 'Siwan', 'Vaishali', 'Pashchim Champaran'
    ),
    'Chandigarh' => array(),
    'Chhattisgarh' => array(
        'Bastar', 'Bilaspur', 'Dantewada', 'Dhamtari', 'Durg', 'Jashpur', 'Janjgir-Champa', 'Korba', 'Koriya', 'Kanker', 'Kawardha', 'Mahasamund', 'Raigarh', 'Rajnandgaon', 'Raipur', 'Surguja'
    ),
    'Dadra and Nagar Haveli' => array(),
    'Daman and Diu' => array(
        'Diu', 'Daman'
    ),
    'Delhi' => array(
        'Central Delhi', 'East Delhi', 'New Delhi', 'North Delhi', 'North East Delhi', 'North West Delhi', 'South Delhi', 'South West Delhi', 'West Delhi'
    ),
    'Goa' => array(
        'North Goa', 'South Goa'
    ),
    'Gujarat' => array(
        'Ahmedabad', 'Amreli District', 'Anand', 'Banaskantha', 'Bharuch', 'Bhavnagar', 'Dahod', 'The Dangs', 'Gandhinagar', 'Jamnagar', 'Junagadh', 'Kutch', 'Kheda', 'Mehsana', 'Narmada', 'Navsari', 'Patan', 'Panchmahal', 'Porbandar', 'Rajkot', 'Sabarkantha', 'Surendranagar', 'Surat', 'Vadodara', 'Valsad'
    ),
    'Haryana' => array(
        'Ambala', 'Bhiwani', 'Faridabad', 'Fatehabad', 'Gurgaon', 'Hissar', 'Jhajjar', 'Jind', 'Karnal', 'Kaithal', 'Kurukshetra', 'Mahendragarh', 'Mewat', 'Panchkula', 'Panipat', 'Rewari', 'Rohtak', 'Sirsa', 'Sonepat', 'Yamuna Nagar', 'Palwal'
    ),
    'Himachal Pradesh' => array(
        'Bilaspur', 'Chamba', 'Hamirpur', 'Kangra', 'Kinnaur', 'Kulu', 'Lahaul and Spiti', 'Mandi', 'Shimla', 'Sirmaur', 'Solan', 'Una'
    ),
    'Jammu and Kashmir' => array(
        'Anantnag', 'Badgam', 'Bandipore', 'Baramula', 'Doda', 'Jammu', 'Kargil', 'Kathua', 'Kupwara', 'Leh', 'Poonch', 'Pulwama', 'Rajauri', 'Srinagar', 'Samba', 'Udhampur'
    ),
    'Jharkhand' => array(
        'Bokaro', 'Chatra', 'Deoghar', 'Dhanbad', 'Dumka', 'Purba Singhbhum', 'Garhwa', 'Giridih', 'Godda', 'Gumla', 'Hazaribagh', 'Koderma', 'Lohardaga', 'Pakur', 'Palamu', 'Ranchi', 'Sahibganj', 'Seraikela and Kharsawan', 'Pashchim Singhbhum', 'Ramgarh'
    ),
    'Karnataka' => array(
        'Bidar', 'Belgaum', 'Bijapur', 'Bagalkot', 'Bellary', 'Bangalore Rural District', 'Bangalore Urban District', 'Chamarajnagar', 'Chikmagalur', 'Chitradurga', 'Davanagere', 'Dharwad', 'Dakshina Kannada', 'Gadag', 'Gulbarga', 'Hassan', 'Haveri District', 'Kodagu', 'Kolar', 'Koppal', 'Mandya', 'Mysore', 'Raichur', 'Shimoga', 'Tumkur', 'Udupi', 'Uttara Kannada', 'Ramanagara', 'Chikballapur', 'Yadagiri'
    ),
    'Kerala' => array(
        'Alappuzha', 'Ernakulam', 'Idukki', 'Kollam', 'Kannur', 'Kasaragod', 'Kottayam', 'Kozhikode', 'Malappuram', 'Palakkad', 'Pathanamthitta', 'Thrissur', 'Thiruvananthapuram', 'Wayanad'
    ),
    'Lakshadweep' => array(),
    'Madhya Pradesh' => array(
        'Alirajpur', 'Anuppur', 'Ashok Nagar', 'Balaghat', 'Barwani', 'Betul', 'Bhind', 'Bhopal', 'Burhanpur', 'Chhatarpur', 'Chhindwara', 'Damoh', 'Datia', 'Dewas', 'Dhar', 'Dindori', 'Guna', 'Gwalior', 'Harda', 'Hoshangabad', 'Indore', 'Jabalpur', 'Jhabua', 'Katni', 'Khandwa', 'Khargone', 'Mandla', 'Mandsaur', 'Morena', 'Narsinghpur', 'Neemuch', 'Panna', 'Rewa', 'Rajgarh', 'Ratlam', 'Raisen', 'Sagar', 'Satna', 'Sehore', 'Seoni', 'Shahdol', 'Shajapur', 'Sheopur', 'Shivpuri', 'Sidhi', 'Singrauli', 'Tikamgarh', 'Ujjain', 'Umaria', 'Vidisha'
    ),
    'Maharashtra' => array(
        'Ahmednagar', 'Akola', 'Amrawati', 'Aurangabad', 'Bhandara', 'Beed', 'Buldhana', 'Chandrapur', 'Dhule', 'Gadchiroli', 'Gondiya', 'Hingoli', 'Jalgaon', 'Jalna', 'Kolhapur', 'Latur', 'Mumbai City', 'Mumbai suburban', 'Nandurbar', 'Nanded', 'Nagpur', 'Nashik', 'Osmanabad', 'Parbhani', 'Pune', 'Raigad', 'Ratnagiri', 'Sindhudurg', 'Sangli', 'Solapur', 'Satara', 'Thane', 'Wardha', 'Washim', 'Yavatmal'
    ),
    'Manipur' => array(
        'Bishnupur', 'Churachandpur', 'Chandel', 'Imphal East', 'Senapati', 'Tamenglong', 'Thoubal', 'Ukhrul', 'Imphal West'
    ),
    'Meghalaya' => array(
        'East Garo Hills', 'East Khasi Hills', 'Jaintia Hills', 'Ri-Bhoi', 'South Garo Hills', 'West Garo Hills', 'West Khasi Hills'
    ),
    'Mizoram' => array(
        'Aizawl', 'Champhai', 'Kolasib', 'Lawngtlai', 'Lunglei', 'Mamit', 'Saiha', 'Serchhip'
    ),
    'Nagaland' => array(
        'Dimapur', 'Kohima', 'Mokokchung', 'Mon', 'Phek', 'Tuensang', 'Wokha', 'Zunheboto'
    ),
    'Orissa' => array(
        'Angul', 'Boudh', 'Bhadrak', 'Bolangir', 'Bargarh', 'Baleswar', 'Cuttack', 'Debagarh', 'Dhenkanal', 'Ganjam', 'Gajapati', 'Jharsuguda', 'Jajapur', 'Jagatsinghpur', 'Khordha', 'Kendujhar', 'Kalahandi', 'Kandhamal', 'Koraput', 'Kendrapara', 'Malkangiri', 'Mayurbhanj', 'Nabarangpur', 'Nuapada', 'Nayagarh', 'Puri', 'Rayagada', 'Sambalpur', 'Subarnapur', 'Sundargarh'
    ),
    'Puducherry' => array(
        'Karaikal', 'Mahe', 'Puducherry', 'Yanam'
    ),
    'Punjab' => array(
        'Amritsar', 'Bathinda', 'Firozpur', 'Faridkot', 'Fatehgarh Sahib', 'Gurdaspur', 'Hoshiarpur', 'Jalandhar', 'Kapurthala', 'Ludhiana', 'Mansa', 'Moga', 'Mukatsar', 'Nawan Shehar', 'Patiala', 'Rupnagar', 'Sangrur'
    ),
    'Rajasthan' => array(
        'Ajmer', 'Alwar', 'Bikaner', 'Barmer', 'Banswara', 'Bharatpur', 'Baran', 'Bundi', 'Bhilwara', 'Churu', 'Chittorgarh', 'Dausa', 'Dholpur', 'Dungapur', 'Ganganagar', 'Hanumangarh', 'Juhnjhunun', 'Jalore', 'Jodhpur', 'Jaipur', 'Jaisalmer', 'Jhalawar', 'Karauli', 'Kota', 'Nagaur', 'Pali', 'Pratapgarh', 'Rajsamand', 'Sikar', 'Sawai Madhopur', 'Sirohi', 'Tonk', 'Udaipur'
    ),
    'Sikkim' => array(
        'East Sikkim', 'North Sikkim', 'South Sikkim', 'West Sikkim'
    ),
    'Tamil Nadu' => array(
        'Ariyalur', 'Chennai', 'Coimbatore', 'Cuddalore', 'Dharmapuri', 'Dindigul', 'Erode', 'Kanchipuram', 'Kanyakumari', 'Karur', 'Madurai', 'Nagapattinam', 'The Nilgiris', 'Namakkal', 'Perambalur', 'Pudukkottai', 'Ramanathapuram', 'Salem', 'Sivagangai', 'Tiruppur', 'Tiruchirappalli', 'Theni', 'Tirunelveli', 'Thanjavur', 'Thoothukudi', 'Thiruvallur', 'Thiruvarur', 'Tiruvannamalai', 'Vellore', 'Villupuram'
    ),
    'Tripura' => array(
        'Dhalai', 'North Tripura', 'South Tripura', 'West Tripura'
    ),
    'Uttarakhand' => array(
        'Almora', 'Bageshwar', 'Chamoli', 'Champawat', 'Dehradun', 'Haridwar', 'Nainital', 'Pauri Garhwal', 'Pithoragharh', 'Rudraprayag', 'Tehri Garhwal', 'Udham Singh Nagar', 'Uttarkashi'
    ),
    'Uttar Pradesh' => array(
        'Agra', 'Allahabad', 'Aligarh', 'Ambedkar Nagar', 'Auraiya', 'Azamgarh', 'Barabanki', 'Badaun', 'Bagpat', 'Bahraich', 'Bijnor', 'Ballia', 'Banda', 'Balrampur', 'Bareilly', 'Basti', 'Bulandshahr', 'Chandauli', 'Chitrakoot', 'Deoria', 'Etah', 'Kanshiram Nagar', 'Etawah', 'Firozabad', 'Farrukhabad', 'Fatehpur', 'Faizabad', 'Gautam Buddha Nagar', 'Gonda', 'Ghazipur', 'Gorkakhpur', 'Ghaziabad', 'Hamirpur', 'Hardoi', 'Mahamaya Nagar', 'Jhansi', 'Jalaun', 'Jyotiba Phule Nagar', 'Jaunpur District', 'Kanpur Dehat', 'Kannauj', 'Kanpur Nagar', 'Kaushambi', 'Kushinagar', 'Lalitpur', 'Lakhimpur Kheri', 'Lucknow', 'Mau', 'Meerut', 'Maharajganj', 'Mahoba', 'Mirzapur', 'Moradabad', 'Mainpuri', 'Mathura', 'Muzaffarnagar', 'Pilibhit', 'Pratapgarh', 'Rampur', 'Rae Bareli', 'Saharanpur', 'Sitapur', 'Shahjahanpur', 'Sant Kabir Nagar', 'Siddharthnagar', 'Sonbhadra', 'Sant Ravidas Nagar', 'Sultanpur', 'Shravasti', 'Unnao', 'Varanasi'
    ),
    'West Bengal' => array(
        'Birbhum', 'Bankura', 'Bardhaman', 'Darjeeling', 'Dakshin Dinajpur', 'Hooghly', 'Howrah', 'Jalpaiguri', 'Cooch Behar', 'Kolkata', 'Malda', 'Midnapore', 'Murshidabad', 'Nadia', 'North 24 Parganas', 'South 24 Parganas', 'Purulia', 'Uttar Dinajpur'
    )
);
?>
<h3 class="gdlr-lms-admin-head" ><?php _e('Profile', 'gdlr-lms'); ?></h3>
<p>Last updated date : <?php  echo $updateaDate; ?></p>
<form id="my-customer-registration" class="gdlr-lms-form" method="post" enctype="multipart/form-data" action="<?php echo esc_url(add_query_arg($_GET)); ?>" >
    <?php
    if ($current_user->roles[0] != 'student') {
        echo '<input class="gdlr-admin-author-image" id="gdlr-admin-author-image" type="file" name="attachment" />';
    }
    ?>
    <style>
        select,input[type='date']{
            width: 94%;
            border: 1px solid #e9e9e9;
            padding: 12px 3%;
            font-size: 13px;
        }
        .gdlr-lms-form label.error{
            color:#72d5cd;
        }



        input[type='text'],input[type='number']{
            width: 41%;
            border: 1px solid #e9e9e9;
            padding: 12px 3%;
            font-size: 13px;
        }
        select{
            width: 100%;

        }

    </style>
    <h3>Personal Details</h3>
    <p class="gdlr-lms-half-left">
        <label for="first-name"><?php _e('First Name *', 'gdlr-lms'); ?></label>
        <input type="text" name="first-name" id="first-name" value="<?php if (!empty($user_meta['first_name'])) echo $user_meta['first_name'][0]; ?>" />
    </p>
    <p class="gdlr-lms-half-right">
        <label for="last-name"><?php _e('Last name *', 'gdlr-lms'); ?></label>
        <input type="text" name="last-name" id="last-name" value="<?php if (!empty($user_meta['last_name'])) echo $user_meta['last_name'][0]; ?>" />
    </p>
    <div class="clear"></div>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label for="email"><?php _e('Email *', 'gdlr-lms'); ?></label>
        <input type="text" name="email" id="email" value="<?php echo $user_info->data->user_email; ?>" />
    </p>	
    <p class="gdlr-lms-half-right">
        <label for="phone"><?php _e('Mobile Number *', 'gdlr-lms'); ?></label>
         
          <input type="text" disabled value='+91' style='width:10%' />
          <input type="text" placeholder="XXXXXXXXXX" maxlength='10' name="mob_number" id="mob_number" value="<?php if (!empty($user_meta['phone'])) echo $user_meta['phone'][0]; ?>" style='width:75%' />

        
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label for="birth-date"><?php _e('Birth Date *', 'gdlr-lms'); ?></label>
     
        <input type="date" name="birth-date" id="birth-date" value="<?php echo date('Y-m-d',strtotime($user_meta['birth_date'][0])); ?>" />
    </p>	
    <p class="gdlr-lms-half-right">
    </p>

    <div class="clear"></div>	
    <h5>Residence Address</h5>
    <p class="gdlr-lms-half-left">
        <label>Address Line 1. *</label>
        <input type='text' name="rs_address1" placeholder="Address Line 1" value="<?php echo $user_meta['rs_address1'][0]; ?>" />
    </p>
    <p class="gdlr-lms-half-left">
        <label>Address Line 2. *</label>
        <input type='text'  name="rs_address2" placeholder="Address Line 2" value="<?php echo $user_meta['rs_address2'][0]; ?>" /> 
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>State. *</label>
        <select name="rs_state">
            <option value="">Select</option>
            <?php
            foreach ($list as $index => $v) {
                ?>
                <option <?php echo $user_meta['rs_state'][0] == $index ? "selected" : ""; ?>><?php echo $index; ?></option>
                <?php
            }
            ?>
        </select>
    </p>
    <p class="gdlr-lms-half-left">
        <label>City. *</label>
        <select name="rs_city">
            <option><?php echo $user_meta['rs_city'][0]; ?></option>
        </select>
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>Pin Code. *</label>
        <input type="text" name="rs_pin" value="<?php echo $user_meta['rs_pin'][0]; ?>" />
    </p>
    <p class="gdlr-lms-half-right">
        <br />
        <br />
        <label> If present address same 
            <input type="checkbox" name="rs_same" />    
        </label>

    </p>
    <div class="clear"></div>	
    <h5>Permanent  Address</h5>
    <p class="gdlr-lms-half-left">
        <label>Address Line 1. *</label>
        <input type='text' name="ps_address1" placeholder="Address Line 1" value="<?php echo $user_meta['ps_address1'][0]; ?>" />
    </p>
    <p class="gdlr-lms-half-left">
        <label>Address Line 2. *</label>
        <input type='text' name="ps_address2" placeholder="Address Line 2" value="<?php echo $user_meta['ps_address2'][0]; ?>" />
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>State. *</label>
        <select name="ps_state">    
            <option value="">Select</option>
            <?php
            foreach ($list as $index => $v) {
                ?>
                <option <?php echo $user_meta['ps_state'][0] == $index ? "selected" : ""; ?>><?php echo $index; ?></option>
                <?php
            }
            ?>
        </select>
    </p>
    <p class="gdlr-lms-half-left">
        <label>City. *</label>
        <select name="ps_city">    
        </select>
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>Pin Code. *</label>
        <input type="text" name="ps_pin" value="<?php echo $user_meta['ps_pin'][0]; ?>" />
    </p>
    <p class="gdlr-lms-half-right">
    </p>
    <div class="clear"></div>
    <h3>Educational Qualification</h3>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>Heighest Qualification *</label>
        <select name="qualification">
            <option value="">Select Qualification</option>
            <option <?php echo $user_meta['qualification'][0] == "Post Graduate" ? "selected" : ""; ?>>Post Graduate</option>
            <option <?php echo $user_meta['qualification'][0] == "Graduate" ? "selected" : ""; ?>>Graduate</option>
            <option <?php echo $user_meta['qualification'][0] == "Under Graduate" ? "selected" : ""; ?>>Under Graduate</option>
        </select>
    </p>
    <p class="gdlr-lms-half-right">
        <label>Course *</label>
        <select name="degrees">
            <optgroup label="----Popular Bachelor's Courses----">
                <option>Bachelors of Technology(B.Tech) - Computer Science</option>
                <option>Bachelors of Technology(B.Tech) - Mechanical engineering</option>
                <option>Bachelors of Technology(B.Tech) - Computer Engineering</option>
                <option>Bachelors of Technology(B.Tech) - Civil Engineering</option>
                <option>Bachelors of Technology(B.Tech) - Chemical Engineering</option>
                <option>Bachelors of Technology(B.Tech) - Electronics</option>
                <option>Bachelor of Computer Applications(B.C.A)</option>
                <option>Bachelor of Computer Science(B.C.S)</option>
                <option>Bachelor of Engineering(B.E)</option>
                <option>Bachelor of Business Administration(B.B.A)</option>
                <option>Bachelor of Business Management(B.B.M)</option>
                <option>Bachelor of Business Studies(B.B.S)</option>
                <option>Bachelor of Arts(B.A)</option>
                <option>Bachelor of Architecture(B.Arch)</option>
                <option>Bachelor of Commerce(B.Com)</option>
                <option>Bachelor of Fashion Technology(B.F.Tech)</option>
            </optgroup>
            <optgroup label="---- Popular Master's Courses----">
                <option>Master's of Technology(M.Tech) - Computer Science</option>
                <option>Master's of Technology(M.Tech) - Mechanical engineering</option>
                <option>Master's of Technology(M.Tech) - Computer Engineering</option>
                <option>Master's of Technology(M.Tech) - Civil Engineering</option>
                <option>Master's of Technology(M.Tech) - Chemical Engineering</option>
                <option>Master's of Technology(M.Tech) - Electronics</option>
                <option>Master of Computer Applications(M.C.A)</option>
                <option>Master of Computer Management(M.C.M)</option>
                <option>MSc Computer Science</option>
                <option>MSc Computer Science and Statistics</option>
                <option>Master of Architecture(M.Arch)</option>
                <option>Master of Business Administration(M.B.A)</option>
                <option>Master of Business Economics(M.B.E)</option>
                <option>Master of Business Laws(M.B.L)</option>
                <option>Master of Business Management(M.B.M)</option>
                <option>Master of Law(LL.M)</option>
                <option>Master of Laws(M.L)</option>
                <option>Master of Science(M.S)</option>
                <option>Master of Science(M.Sc)</option>
                <option>Master of Commerce(M.Com)</option>
                <option>Master of Arts(M.A)</option>
            </optgroup>
            <optgroup label="----Other Bachelor's Courses----">
                <option>Bachelor Hotel Management and Catering Technology(B.H.M.C.T)</option>
                <option>Bachelor Library Science(B.L.Sc)</option>
                <option>Bachelor of Applied Sciences(B.A.S)</option>
                <option>Bachelor of Arts Bachelor of Education(B.A. B.Ed)</option>
                <option>Bachelor of Arts Bachelor of Law(B.A.LLB)</option>
                <option>Bachelor of Audiology and Speech Language Pathology(B.A.S.L.P)</option>
                <option>Bachelor of Ayurvedic Medicine and Surgery(B.A.M.S)</option>
                <option>Bachelor of Business Administration Bachelor of Law(B.B.A LL.B)</option>
                <option>Bachelor of Communication Journal</option>
            </optgroup>  
        </select>
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>College Name / University Name *</label>
        <input type="text" name="college_name" value="<?php echo $user_meta['college_name'][0] ?>">			
    </p>
    <p class="gdlr-lms-half-right">
        <label>College State *</label>
        <select name="college_state">
            <option value="">Select</option>
            <?php
            foreach ($list as $index => $v) {
                ?>
                <option <?php echo $user_meta['college_state'][0] == $index ? "selected" : ""; ?>><?php echo $index; ?></option>
                <?php
            }
            ?>
        </select>			
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>College City *</label>
        <select name="college_city">

        </select>					
    </p>
    <p class="gdlr-lms-half-right">			
    </p>
    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>Passing Year *</label>
        <select name="passing_year">
            <?php
            $range = range(date('Y', strtotime('-3 years')), date('Y', strtotime('+4 years')));
            foreach ($range as $v) {
                ?>
                <option <?php echo $user_meta['passing_year'][0]==$v ? "selected" : ""; ?>><?php echo $v; ?></option>
                <?php
            }
            ?>
        </select>
    </p>
    <p class="gdlr-lms-half-right">
        <label class="current-year" >University to which college belongs. *</label>
        
        <label class="greater-year" >Aggregate % *</label>
        <input type="text" name="percentage" class="current-year"  value="<?php echo $user_meta['percentage'][0]; ?>">
        <input type="number" name="ex_percent" value="<?php echo $user_meta['ex_percent'][0]; ?>" class="greater-year" placeholder="Percent" min="0" max="100" style="width:93%" />
        
    </p>

    <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label>Upload CV *</label>
        <?php
        if(!empty($user_meta['cv'][0])){
        ?>
        <a href="<?php echo $user_meta['cv'][0]; ?>">Download your cv </a>
<?php

}
?>


        <input type="file" name="cv" accept="application/msword, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document" />(.doc,.docx,.pdf)
    </p>
	 <div class="clear"></div>
    <p class="gdlr-lms-half-left">
        <label ">Skills *</label>
        <input  type="text" name="skills" placeholder='Enter comma separated values'   value="<?php echo $user_meta['skills'][0]; ?>" />
    </p>


    <div class="clear"></div>
    <h3 class="professional">Professional Experience</h3>
    <div class="clear"></div>				
    

     <p class="gdlr-lms-half-left">
       <label>Do you have work experience *</label>

       <input type="radio" name="hasexp" <?php echo $user_meta['hasexp'][0]=='0'?"checked":""; ?> id="hasexpno"  value="0" /><span>No&nbsp;&nbsp;&nbsp;</span>
        <input type="radio" name="hasexp" <?php echo $user_meta['hasexp'][0] == '1' ? "checked" : ""; ?> id="hasexpnoy"  value="1" /><span>Yes</span>

     </p>
     <div class="clear"></div>

     <p class="gdlr-lms-half-left">
		<label class="exp">Years and Months</label>
        <input type="number" name="ex_years" value="<?php echo $user_meta['ex_years'][0]; ?>"   placeholder="Years" id="ex-years" class="exp"  min="0" />
        <input type="number" name="ex_months" value="<?php echo $user_meta['ex_months'][0]; ?>" id="ex-months"  class="exp"   placeholder="Months" min="0" max="11" />
    </p>
	<p class="gdlr-lms-half-right">
        <label class="exp">Current Company</label>
        <input type="text" name="city_of_work" class="exp"  value="<?php echo $user_meta['city_of_work'][0]; ?>" />    
    </p>
    <div class="clear"></div>
    

    <p class="gdlr-lms-half-right">
        <label class="exp">Relocateable *</label>
        <select class="exp" name="relocateable">
            <option>Yes</option>
            <option>No</option>
        </select>
    </p>
      
    <div class="clear"></div>
    <?php if (false && $current_user->roles[0] == 'administrator' || $current_user->roles[0] == 'instructor') { ?>
        <p class="gdlr-lms-half-right">
            <label for="author-biography"><?php _e('Full Biography', 'gdlr-lms'); ?></label>
            <textarea name="author-biography" id="author-biography" ><?php if (!empty($user_meta['author-biography'])) echo esc_textarea($user_meta['author-biography'][0]); ?></textarea>
        </p>	
    <?php } ?>
    <div class="clear"></div>
    <?php if (false && $current_user->roles[0] == 'administrator' || $current_user->roles[0] == 'instructor') { ?>
        <p class="gdlr-lms-half-left">
            <label for="location"><?php _e('Location', 'gdlr-lms'); ?></label>
            <input type="text" name="location" id="location" value="<?php if (!empty($user_meta['location'])) echo $user_meta['location'][0]; ?>" />
        </p>	
        <p class="gdlr-lms-half-right">
            <label for="position"><?php _e('Position', 'gdlr-lms'); ?></label>
            <input type="text" name="position" id="position" value="<?php if (!empty($user_meta['position'])) echo $user_meta['position'][0]; ?>" />
        </p>	
        <div class="clear"></div>
        <p class="gdlr-lms-half-left">
            <label for="current-work"><?php _e('Current Work', 'gdlr-lms'); ?></label>
            <input type="text" name="current-work" id="current-work" value="<?php if (!empty($user_meta['current-work'])) echo $user_meta['current-work'][0]; ?>" />
        </p>	
        <p class="gdlr-lms-half-right">
            <label for="past-work"><?php _e('Past Work', 'gdlr-lms'); ?></label>
            <input type="text" name="past-work" id="past-work" value="<?php if (!empty($user_meta['past-work'])) echo $user_meta['past-work'][0]; ?>" />
        </p>	
        <div class="clear"></div>		
        <p class="gdlr-lms-half-left">
            <label for="specialist"><?php _e('Specialist In', 'gdlr-lms'); ?></label>
            <input type="text" name="specialist" id="specialist" value="<?php if (!empty($user_meta['specialist'])) echo $user_meta['specialist'][0]; ?>" />
        </p>	
        <p class="gdlr-lms-half-right">
            <label for="experience"><?php _e('Experience', 'gdlr-lms'); ?></label>
            <input type="text" name="experience" id="experience" value="<?php if (!empty($user_meta['experience'])) echo $user_meta['experience'][0]; ?>" />
        </p>	
        <div class="clear"></div>		
        <p class="gdlr-lms-half-left">
            <label for="social-network"><?php _e('Social Network', 'gdlr-lms'); ?></label>
            <textarea name="social-network" id="social-network" ><?php if (!empty($user_meta['social-network'])) echo esc_textarea($user_meta['social-network'][0]); ?></textarea>
        </p>		
        <div class="clear"></div>		
    <?php } ?>

      <p><input type='checkbox' required name='accept' /> I accept Terms and Conditions</p>
    <p>
        <input type="hidden" name="action" value="edit-profile" />
        <input type="submit" class="gdlr-lms-button cyan" value="<?php _e('Update', 'gdlr-lms'); ?>" />
    </p>		
</form>	
<?php
$cities = json_encode($list);
?>
<script>
    $ = jQuery;
    $(document).ready(function (e) {
        var cities = JSON.parse('<?php echo $cities ?>');
        $("[name='rs_state']").on("change", function () {
            var html = "";
            html += "<option value=''>";
            html += "Select";
            html += "</option>";
            var vl = $(this).val();
            $(cities[vl]).each(function (i, v) {
                html += "<option>";
                html += v;
                html += "</option>";
            })
            $("[name='rs_city']").html(html);
        }).trigger("change");
        $("[name='rs_city']").val('<?php echo $user_meta['rs_city'][0]; ?>');
        $("[name='ps_state']").on("change", function () {
            var html = "";
            html += "<option value=''>";
            html += "Select";
            html += "</option>";
            var vl = $(this).val();
            $(cities[vl]).each(function (i, v) {
                html += "<option>";
                html += v;
                html += "</option>";
            })
            $("[name='ps_city']").html(html)
        }).trigger("change");
        $("[name='ps_city']").val('<?php echo $user_meta['ps_city'][0]; ?>');

        $("[name='college_state']").on("change", function () {
            var html = "";
            html += "<option value=''>";
            html += "Select";
            html += "</option>";
            var vl = $(this).val();
            $(cities[vl]).each(function (i, v) {
                html += "<option>";
                html += v;
                html += "</option>";
            })
            $("[name='college_city']").html(html);
        }).trigger("change");

        $("[name='college_state']").val('<?php echo $user_meta['college_state'][0]; ?>');

        $("[name='college_city']").val('<?php echo $user_meta['college_city'][0]; ?>');
        $("[name='degrees']").val('<?php echo $user_meta['degrees'][0]; ?>')
        $("[name='qualification']").val('<?php echo $user_meta['qualification'][0]; ?>')
        $("[name='relocateable']").val('<?php echo $user_meta['relocateable'][0]; ?>')

        try {
            $.getScript("https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js", function () {
                $.getScript("https://cdn.jsdelivr.net/jquery.validation/1.15.1/additional-methods.min.js", function () {
                    $("#my-customer-registration").validate({
                        rules: {
                            user_name: {
                                required: true,
                            },
                            user_email: {
                                required: true,
                                email: true,
                            },
                            accept:{
                              required: true,
                            },
                            mob_number: {
                                required: true,
                                number: true,
                            },
                            dob: {
                                required: true,
                            },
                            qualification: {
                                required: true,
                            },
                            college_name: {
                                required: true,
                            },
                            college_city: {
                                required: true,
                            },
                            university_blongs: {
                                required: true,
                            },
                            degrees: {
                                required: true,
                            },
                            passing_year: {
                                required: true,
                            },
                            ex_year: {
                                required: true,
                            },
                            ex_months: {
                                required: true,
                            },
                            ex_percent: {
                                required: true,
                            },
                            rs_address1: {
                                required: true,
                            },
                            rs_address2: {
                                required: true,
                            },
                            rs_city: {
                                required: true,
                            },
                            rs_state: {
                                required: true,
                            },
                            ps_address1: {
                                required: true,
                            },
                            ps_address2: {
                                required: true,
                            },
                            ps_city: {
                                required: true,
                            },
                            ps_state: {
                                required: true,
                            },
                            relocateable: {
                                required: true,
                            },
                            'first-name': {
                                required: true,
                            },
                            cv: {
//                                required: true,
                                accept: "application/msword,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            },
                        },
                    });
                    $("[name='passing_year']").on("change", function () {
                        var pass_year = parseInt($(this).val());
                        var curent_year = new Date().getFullYear()
                        if (pass_year == curent_year) {
                            //$(".less-year").hide()
                            $(".greater-year").hide()
                            $(".current-year").show()
							//$("#hasexpno").prop('checked', 'checked');
                        } else if (pass_year < curent_year) {
                            $(".current-year").hide()
                            $(".greater-year").hide()
                            //$(".less-year").show()
							//$("#hasexpnoy").prop('checked', 'checked');
                        } else {
							//$("#hasexpno").prop('checked', 'checked');
                            $(".current-year").hide()
                        //    $(".less-year").hide()
                            $(".greater-year").show()
                        }
						
                        if ($("#hasexpno").is(":checked")) {
                            $(".exp").hide()
                        } else {
                            $(".exp").show()
                        }
//                        $("[name='hasexp']").tirgger("change");
                    }).trigger("change")
                })

                $("[name='rs_same']").on("click", function () {
                    if ($(this).is(":checked")) {
                        $("[name='ps_address1']").val($("[name='rs_address1']").val());
                        $("[name='ps_address2']").val($("[name='rs_address2']").val());
                        $("[name='ps_state']").val($("[name='rs_state']").val()).trigger("change");
                        $("[name='ps_city']").val($("[name='rs_city']").val());
                        $("[name='ps_pin']").val($("[name='rs_pin']").val());
                    }
                })
                $("[name='hasexp']").on("change", function () {
                    if ($("#hasexpno").is(":checked")) {
                        $(".exp").hide()
                    } else {
                        $(".exp").show()
                    }
                }).trigger('change')

                $("[name='qualification']").on("change", function () {
                    var val = $(this).val();
                    if (val == 'Under Graduate' || val == '') {
                        $("[name='score']").removeAttr("disabled");
                    } else {
                        $("[name='score']").attr("disabled", true)
                    }
                }).trigger("change")
            })
        } catch (e) {
            console.log(e)
        }

    })
</script>