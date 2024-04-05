<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <div class="header">| Panel Admin</div>
            <div class="profile">
                <img src="asset/profileee.jpg" alt="">
                <h4>Rayhan</h4>
                <h5>Admin</h5>
            </div>
            <div class="menu-bar">
                <button class="dashbord">Dashboard</button>
                <button class="users">Users</button>
                <button class="settings">Settings</button>
                <a href="login.php"><button class="logout" onclick="">Log Out</button></a>
            </div>
        </div>
        <div class="content">
            <nav class="navbar">
                <a id="btnback" href="#" class="bx bx-arrow-back"></a>
                <a id="search" href="#" class="bx bx-search"></a>
                <form action=""><input type="text" placeholder="Search" class="search"></form>
                <a id="notif" href="#" class="bx bx-bell"></a>
            </nav>
            <div class="mini-container">
                <div class="add-user">
                    <h4>Users List</h4>
                    <button>Tambah User</button>
                </div>
                <hr width="100%" height="2px">
                
                    <table width="100%" border="0">
                        <thead class="table-head">
                            <tr>
                                <td>id</td>
                                <td>Name</td>
                                <td>No</td>
                                <td>Owner</td>
                                <td class="text-edit-hps">Edit &#8195  &#8195  Hapus</td>
                            </tr>
                        </thead>
                        <!-- isiann -->
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>2</td>
                                <td>Izzudd</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>3</td>
                                <td>ircadd miil</td>
                                <td>082333991963</td>
                                <td>Pegawai</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>4</td>
                                <td>Yuntii</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>5</td>
                                <td>Cyaditt</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>6</td>
                                <td>Yamenaa</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-body">
                            <tr>
                                <td>1</td>
                                <td>Rayhan Izzuddin</td>
                                <td>082333991963</td>
                                <td>Owner</td>
                                <td class= "btn-edit-hps">
                                 <button class="bx bx-edit" Id="icon-edit"></button> 
                                 <button class= "bx bx-x-circle" Id="icon-delete"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>
</body>
</html> 
