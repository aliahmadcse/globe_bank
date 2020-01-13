<?php

function find_all_subjects()
{
    global $db;
    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_subject_by_id($id)
{
    global $db;
    $sql = "SELECT * FROM subjects ";
    $sql .= "WHERE id='$id'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; //an assoc array of a single subject
}

function find_all_pages()
{
    global $db;
    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id ASC,position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_page_by_id($id)
{
    global $db;
    $sql = "SELECT * FROM pages ";
    $sql .= "WHERE id='$id'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page; //returns the assoc array of single page
}
