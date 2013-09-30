object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 465
  ClientWidth = 595
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  Menu = MainMenu1
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object MainMenu1: TMainMenu
    Left = 568
    Top = 65520
    object Menu1: TMenuItem
      Caption = 'Inicio'
      object Mascotas1: TMenuItem
        Caption = 'Mascotas'
        object Ingresar1: TMenuItem
          Caption = 'Ingresar'
        end
        object Eliminar1: TMenuItem
          Caption = 'Eliminar'
        end
        object Consultar1: TMenuItem
          Caption = 'Consultar'
        end
      end
      object Propietarios1: TMenuItem
        Caption = 'Propietarios'
        object Ingresar2: TMenuItem
          Caption = 'Ingresar'
        end
        object Eliminar2: TMenuItem
          Caption = 'Eliminar'
        end
        object Consultar2: TMenuItem
          Caption = 'Consultar'
        end
      end
      object Campeonatos1: TMenuItem
        Caption = 'Campeonatos'
        object ingresar3: TMenuItem
          Caption = 'Ingresar'
        end
        object Eliminar3: TMenuItem
          Caption = 'Eliminar'
        end
        object Consultar3: TMenuItem
          Caption = 'Consultar'
        end
      end
      object N1: TMenuItem
        Caption = '-'
      end
      object Salir1: TMenuItem
        Caption = 'Salir'
        OnClick = Salir1Click
      end
    end
  end
end
