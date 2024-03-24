/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.Cookie;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;


@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String email = request.getParameter("email");
        String password = request.getParameter("password");

        // Here you would perform your authentication logic
        // For demonstration purpose, I'll use hardcoded credentials
        if ("abc@gmail.com".equals(email) && "123".equals(password)) {
            // If authenticated, create a cookie with the user's email
            Cookie cookie = new Cookie("user", email);
            // Set the cookie to expire in 24 hours (86400 seconds)
            cookie.setMaxAge(86400);
            response.addCookie(cookie);
            // Redirect to secure page
            response.sendRedirect("securepage.jsp");
        } else {
            // If not authenticated, redirect back to login form
            response.sendRedirect("index.html");
        }
    }
}
