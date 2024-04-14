<%-- 
    Document   : products.jsp
    Created on : 07-Apr-2024, 8:52:11?am
    Author     : DELL
--%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@page import="product.*" %>

<html>
<head>
    <title>Product Listing</title>
</head>
<body>
    
    <%
        java.util.ArrayList<Products> productsList = new java.util.ArrayList<>();
        productsList.add(new Products("Product 1", 10.99, "Yes"));
        productsList.add(new Products("Product 2", 5.99, "No"));
        productsList.add(new Products("Product 3", 20.50, "Yes"));

        if (request.getParameter("orderByPrice") != null) {
            java.util.Collections.sort(productsList, new java.util.Comparator<Products>() {
                @Override
                public int compare(Products p1, Products p2) {
                    return Double.compare(p2.price, p1.price);
                }
            });
        }

        pageContext.setAttribute("products", productsList);
    %>
    <h1>Product Listing</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>In Stock</th>
            </tr>
        </thead>
        <tbody>
          
            
            <c:forEach items="${pageScope.products}" var="product" >
                <tr>
                    <td>${product.name}</td>
                    <td>${product.price}</td>
                    <td>${product.inStock}</td>
                </tr>
            </c:forEach>
        </tbody>
    </table>
</body>
</html>
