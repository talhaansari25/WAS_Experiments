<!-- Servlet Web Application with Database Connection -->
<%@ page import="java.sql.*" %>
<%
    String url = "jdbc:mysql://localhost:3306/student_db";
    String user = "root";
    String password = "";
    Connection con = null;
    try {
        Class.forName("com.mysql.jdbc.Driver");
        con = DriverManager.getConnection(url, user, password);
        Statement stmt = con.createStatement();
        ResultSet rs = stmt.executeQuery("SELECT * FROM students");
        while (rs.next()) {
            out.println("Rno: " + rs.getInt("Rno") + " - Name: " + rs.getString("Name") + " - College: " + rs.getString("College") + " - Branch: " + rs.getString("Branch") + "<br>");
        }
    } catch (Exception e) {
        e.printStackTrace();
    } finally {
        if (con != null) try { con.close(); } catch (SQLException e) { e.printStackTrace(); }
    }
%>
