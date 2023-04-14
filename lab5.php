<!DOCTYPE html>
<html>
<head>
	<title>Event Management System</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: lavender;
			margin: 0;
			padding: 0;
		}
		
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			text-align: center;
		}
		
		h1 {
			font-size: 32px;
			margin-top: 0;
			margin-bottom: 20px;
		}
		
		p {
			font-size: 18px;
			margin-top: 0;
			margin-bottom: 10px;
		}
		
		table {
			margin: 0 auto;
			border-collapse: collapse;
		}
		
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}
		
		th {
			background-color: lavender;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Planarize</h1>
        <h1>Event Management System</h1>
		
		<script>
			// Arrays example
			var events = ["Conference", "Seminar", "Workshop", "Webinar"];
			document.write("<p>Upcoming events: " + events.join(", ") + "</p>");

			// Built-in Objects example
			var date = new Date();
			document.write("<p>Today's date: " + date.toLocaleDateString() + "</p>");
			
			// PHP Operators example
			
        </script>
        <?php
				$num_attendees = 90;
				$num_tickets = 100;
				$percent_capacity = $num_attendees / $num_tickets * 100;
				echo "<p>Current capacity: " . $percent_capacity . "%</p>";
				
				$is_sold_out = ($percent_capacity >= 100);
				echo "<p>Sold out? " . ($is_sold_out ? "Yes" : "No") . "</p>";
			?>
			<!-- Table example using arrays -->
			
            <script>
				var attendees = [
					{name: "John Smith", email: "johnsmith@example.com", ticket_type: "Regular"},
					{name: "Jane Doe", email: "janedoe@example.com", ticket_type: "VIP"},
					{name: "Bob Johnson", email: "bobjohnson@example.com", ticket_type: "Regular"}
				];
				
				document.write("<h2>Attendee List</h2>");
				document.write("<table>");
				document.write("<tr><th>Name</th><th>Email</th><th>Ticket Type</th></tr>");
				
				for (var i = 0; i < attendees.length; i++) {
					document.write("<tr>");
					document.write("<td>" + attendees[i].name + "</td>");
					document.write("<td>" + attendees[i].email + "</td>");
					document.write("<td>" + attendees[i].ticket_type + "</td>");
					document.write("</tr>");
				}
				
				document.write("</table>");
		    </script>
	</div>
</body>
</html>