This project was done as part of a 3rd year SQL course at Queen's University.
These were the requirements:
Rental Database Functional Requirements
Please note:  Instruction on Application Development will be given in class.  Until we have covered this material, you probably do not have enough information to complete this assignment.

You will write a fully functioning web-based interface for the rental database  that we have been working on in class thus far.

Your application should implement the following functionality.

List all the property IDs along with the names of the owner(s) and the name of the manager (if there is one).  
Provide a way to allow an existing rental group to update their preferences.  
Show the user a listing of all rental groups, allow them to choose one and show the names of the students included in the rental group as well as the rental preferences of the group.
Make a table that shows the average monthly rent for each category of rental unit:  houses, apartments and rooms.  CLARIFICATION:  Your table should have 3 columns, one for each of "Houses", "Apartments" and "Rooms" with the average rent for each category (one row of data). 
How you organize your application is up to you, but your application must have more than one web page -- not all functionality should be on the same page.  Your home page should be called rental.  This can be an html or a php page.   To use your application, we should NOT have to directly access any other URL other than the rental page.  (You may have links on the home page to other functionality which is acceptable). 

Information that would be well suited to a tabular display must be displayed as a table.  Proper html tags must be used for headings, paragraphs, lists etc.    Your application doesn't need to be flashy, but it needs to be visually appealing with at least one image.  Make it look as professional as you can.  I'm not asking for an expert web application, I'm just looking for some reasonable effort.

Your application must use PHP to generate the dynamic content (ie. accessing the back end database and displaying the results) and must be able to work with (almost) any DBMS (therefore you must be using PDOs, not the mysqli api). You may use only basic html, css and php to code your website, no fancy tools.

These requirements are a minimum, you may add additional functionality.  You may find that you need to add additional data and or functionality to make your application realistic, or to demonstrate that it works.  You may assume that user input is correct so input syntax checking can be minimal.  You should gracefully handle the case(s) where your query does not return any results.
