<%-- 
    Document   : securepage
    Created on : 24-Mar-2024, 10:03:12?am
    Author     : DELL
--%>
<%@ page import="javax.servlet.http.Cookie" %>
<%@ page import="java.io.*" %>
<%@ page import="java.util.*" %>
<%
    // Check if the "user" cookie exists
    String userEmail = "";
    Cookie[] cookies = request.getCookies();
    if(cookies != null) {
        for(Cookie cookie : cookies) {
            if(cookie.getName().equals("user")) {
                userEmail = cookie.getValue();
                break;
            }
        }
    }

    // If user is not authenticated, redirect back to login page
    if(userEmail.isEmpty()) {
        response.sendRedirect("index.html");
    }
%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
</head>
<body>
    <h2>Welcome to Secure Page</h2>
    <p>User: <%= userEmail %></p>
    <!-- Content of the secure page goes here -->
</body>
</html>
