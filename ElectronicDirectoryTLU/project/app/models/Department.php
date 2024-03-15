<?php
// Hàm lấy danh sách bộ phận
function getDepartments()
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql);
    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }
    mysqli_free_result($result);
    return $departments;
}
// Hàm lấy thông tin chi tiết bộ phận
function getDepartmentById($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $department = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $department;
}
function addDepartment($name, $address, $email, $phone, $logo, $website, $parent)
{
    $conn = connectDB();
    $sql = "INSERT INTO departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssi", $name, $address, $email, $phone, $logo, $website, $parent);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function updateDepartment($id, $name, $address, $email, $phone, $logo, $website, $parent)
{
    $conn = connectDB();
    $sql = "UPDATE departments SET DepartmentName = ?, Address = ?, Email = ?, Phone = ?, Logo = ?, Website = ?, ParentDepartmentID = ? WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssii", $name, $address, $email, $phone, $logo, $website, $parent, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function deleteDepartment($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM departments WHERE DepartmentID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function isDepartmentExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM departments WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchDepartments($keyword, $attribute)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE " . $attribute . " LIKE ?"; // OR description LIKE ?";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $keyword); //, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }
    return $departments;
}
