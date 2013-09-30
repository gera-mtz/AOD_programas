'......................................................'
'La aplicacion se tiene que ejecutar como administrador
'......................................................'
Public Class Form1

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Const archivo As String = "C:\prueba2.txt"
        Dim texto As String = "Hola mundo"

        Dim x As New System.IO.StreamWriter(archivo)
        x.WriteLine(texto)
        x.Close()
        MessageBox.Show("Archivo creado")

    End Sub
End Class
