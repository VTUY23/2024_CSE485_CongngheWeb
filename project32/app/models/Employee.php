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
    $sql = "SELECT * FROM employees WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $employee = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $employee;
}

function addEmployee($name, $email, $department_id)
{
    $conn = connectDB();
    $sql = "INSERT INTO employees (name, email, department_id) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $department_id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function updateEmployee($id, $name, $email, $department_id)
{
    $conn = connectDB();
    $sql = "UPDATE employees SET name = ?, email = ?, department_id = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $name, $email, $department_id, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function deleteEmployee($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE id = ?";
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

function searchEmployees($keyword)
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE name LIKE ? OR email LIKE ? OR department_id IN (SELECT id FROM departments WHERE name LIKE ?)";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    // Process the result here
    mysqli_stmt_close($stmt);
    return $result;
}
?>