unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, FileUtil, Forms, Controls, Graphics, Dialogs, ExtCtrls;

type

  { TSplashScreen }

  TSplashScreen = class(TForm)
    Image1: TImage;
    procedure FormClose(Sender: TObject; var CloseAction: TCloseAction);
    procedure FormCreate(Sender: TObject);
  private
    { private declarations }
  public
    { public declarations }
  end;

var
  SplashScreen: TSplashScreen;
  dirname: String;

implementation

{$R *.lfm}

{ TSplashScreen }


procedure TSplashScreen.FormCreate(Sender: TObject);
begin
   dirname := 'arvo';
   If DirectoryExists(dirname) then
   else CreateDir(dirname);
end;

procedure TSplashScreen.FormClose(Sender: TObject; var CloseAction: TCloseAction);
begin
  CloseAction:= caFree;
end;

end.

