<?php
    class UserControllers {

        public function ListUsersController(){
            $ListUser = UserModels::ListUsersModel();
            foreach ($ListUser as $key => $User) {
                $State = ($User['UState'] == '1') ? 'ACTIVO' : 'PASIVO';
                echo '<tr>
                        <td>'.$User['IdUser'].'</td>
                        <td>'.$User['UName'].'</td>
                        <td>'.$User['UPassword'].'</td>
                        <td>'.$State.'</td>
                        <td>
                            <button class="btn btn-sm btn-info"><i class="fas fa-user-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </td>
                    </tr>';
            }
        }

        public function InsertUserController(){
            if (isset($_POST['IUName'])) {

                $DataController = array(
                    'UUser' => $_POST['IUName'],
                    'UPassword' => $_POST['IUPassword']
                );

                $InsertUser = UserModels::InsertUserModel($DataController);

                ($InsertUser == 'success') ? header('Location: user') : 'error';
            }
        }

    }