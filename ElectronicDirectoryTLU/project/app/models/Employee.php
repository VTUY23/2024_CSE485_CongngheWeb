<?php
function getEmployees()
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    $employees = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $employees[] = $row;
    }
    mysqli_free_result($result);
    return $employees;
}
function getEmployeeById($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE EmployeeID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employee = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employee;
}
function addEmployee($name, $address, $email, $phone, $position, $logo, $parent)
{
    $conn = connectDB();
    $sql = "INSERT INTO employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $name, $address, $email, $phone, $position, $logo, $parent);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function updateEmployee($id, $name, $address, $email, $phone, $position, $logo, $parent)
{
    $conn = connectDB();
    $sql = "UPDATE employees SET FullName = ?, Address = ?, Email = ?, MobilePhone = ?, Position = ?, Avatar = ?, DepartmentID = ? WHERE EmployeeID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssii", $name, $address, $email, $phone, $position, $logo, $parent, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function deleteEmployee($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE EmployeeID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function isEmployeeExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM employees WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchEmployees($keyword, $attribute)
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE " . $attribute . " LIKE ?"; // OR email LIKE ? OR department_id IN (SELECT id FROM departments WHERE name LIKE ?)";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $keyword); //, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employees = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $employees[] = $row;
    }
    mysqli_stmt_close($stmt);
    return $employees;
}
