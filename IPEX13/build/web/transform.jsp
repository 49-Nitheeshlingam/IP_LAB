<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/xml" prefix="x" %>
<!DOCTYPE html>
<html>
<head>
    <title>Transformed Students</title>
</head>
<body>
    <h1>Transformed Students</h1>
    <x:transform xml="${pageContext.request.getServletContext().getResourceAsStream('/WEB-INF/resources/students.xml')}"
                 xslt="${pageContext.request.getServletContext().getResourceAsStream('/WEB-INF/resources/students.xsl')}">
        <x:param name="param1" value="value1" />
    </x:transform>
</body>
</html>
