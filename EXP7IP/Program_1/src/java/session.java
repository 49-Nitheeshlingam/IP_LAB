/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;


public class session extends HttpServlet {
    
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try{
            response.setContentType("text/html");
            String uname=request.getParameter("t1");
            String email=request.getParameter("t2");
            HttpSession session=request.getSession();
            session.setAttribute("name",uname);
            session.setAttribute("email", email);
            try (PrintWriter out = response.getWriter()) {
                out.println("Hello"+uname);
                out.println("<a href='session2'>Visit</a>");
            }
        }catch(IOException e){
            System.out.println(e.getMessage());
        }
        
    }


}
