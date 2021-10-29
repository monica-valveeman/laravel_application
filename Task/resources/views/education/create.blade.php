<!DOCTYPE html>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('validation/validation2.js')}}"></script>

    </head>
    <body>
        <h1>Education Details</h1>
        <form id="educationform" action="/education" method="POST">
            <table>
                <tr>
                    <td align="right"><label>Year of experience:</label></td>
                    <td align="left">
                        <select name="year_of_experience">
                            <option value="">...Experience...</option>
                                <?php
                                    $years = [1,2,3,4,5,6,7,8,9,10];
                                    $i=0;
                                    $output="";
                                        for($i;$i<sizeof($years);$i++)
                                        {
                                            $output .= "<option value='".$years[$i]."'>".$years[$i]."</option>";
                                        }   
                                    echo $output;
                                ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="right"><label>Under Graduate(UG):</label></td>
                    <td align="left">
                        <select name="under_graduate">
                            <option value="">...UG Degrees...</option>
                                <?php
                                    $UG = ['B.Sc Maths','B.Sc Physics','B.Sc Chemistry', 'B.Sc CS','B.Sc IT','B.B.A', 'B.C.A'];
                                    $j=0;
                                    $output1="";
                                        for($j;$j<sizeof($UG);$j++)
                                        {
                                            $output1 .= "<option value='".$UG[$j]."'>".$UG[$j]."</option>";
                                        }   
                                    echo $output1;
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><label>Post Graduate(PG):</label></td>
                    <td align="left">
                        <select name="post_graduate">
                            <option value="">...PG Degrees...</option>
                                <?php
                                    $PG = ['M.Sc Maths','M.Sc Physics','M.Sc Chemistry', 'M.Sc CS','M.Sc IT','M.B.A', 'M.C.A'];
                                    $j=0;
                                    $output1="";
                                        for($j;$j<sizeof($PG);$j++)
                                        {
                                            $output1 .= "<option value='".$PG[$j]."'>".$PG[$j]."</option>";
                                        }   
                                    echo $output1;
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><label>User Id:</label></td>
                    <td align="left"><input type="text" name="user_id"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"><input type="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>