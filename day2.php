getClassNames: function(b) {
            var c = [],
                d = this.viewDate.getUTCFullYear(),
                f = this.viewDate.getUTCMonth();
				var zzD =b.getUTCDate();
				var zzY = b.getUTCFullYear();
                var zzM = b.getUTCMonth();
                <?php
$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect($host,$username,$password,"wedding");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}

$result = mysqli_query($conn,"SELECT * FROM book");
$i=0;
while($row = mysqli_fetch_array($result)) {
	?>
	if(zzM==<?php echo $row["mm"]-1;?> && zzD==<?php echo $row["dd"];?> && zzY==<?php echo $row["yyyy"];?>) {c.push("busy");}
	<?php
$i++;
}
?>	
				if(zzM==2 && zzD==11) c.push("free");	
                g = new Date;	
            return b.getUTCFullYear() < d || b.getUTCFullYear() === d && b.getUTCMonth() < f ? c.push("old") :	 (b.getUTCFullYear() > d || b.getUTCFullYear() === d && b.getUTCMonth() > f) && c.push("new"),	 this.focusDate && b.valueOf() === this.focusDate.valueOf() && c.push("focused"), this.o.todayHighlight 	&& b.getUTCFullYear() === g.getFullYear() && b.getUTCMonth() === g.getMonth() && b.getUTCDate()	 === g.getDate() && c.push("today"), -1 !== this.dates.contains(b) && c.push("active"), 	(b.valueOf() < this.o.startDate || b.valueOf() > this.o.endDate || -1 !== a.inArray(b.getUTCDay(), 	this.o.daysOfWeekDisabled)) && c.push("disabled"), this.o.datesDisabled.length > 0 && 	a.grep(this.o.datesDisabled, function(a) {	
                return e(b, a)	
            }).length > 0 && c.push("disabled", "disabled-date"), this.range && (b > this.range[0] && b < 	this.range[this.range.length - 1] && c.push("range"), -1 !== a.inArray(b.valueOf(), this.range) && 	c.push("selected")), c	
        }
        
Now run the index.php file.