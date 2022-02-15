package etudiant;
import java.awt.event.FocusEvent;

import java.awt.EventQueue;
import javax.swing.*;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import java.awt.Font;

import javax.swing.JButton;
import javax.swing.JTextField;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.awt.event.ActionListener;
import java.awt.event.FocusAdapter;
import java.awt.event.ActionEvent;


public class LoginEtudiant extends JFrame {

	private JPanel contentPane;
	public JTextField Semail;
	public JTextField Sapoge;
	public JFrame frame;
	public static String Email,Apogee,nom,prenom,cin,AttestationChoisi;
	private JTextField CIN;
	private JTextField textField;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					LoginEtudiant frame = new LoginEtudiant();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	
	public void addPlaceholderStyle(JTextField txt) {
		Font font = txt.getFont();
		font = font.deriveFont(Font.ITALIC);
		txt.setFont(font);
		txt.setForeground(Color.white);
	}
	
	public void removePlaceholderStyle(JTextField txt) {
		Font font = txt.getFont();
		font = font.deriveFont(Font.ITALIC);
		txt.setFont(font);
		txt.setForeground(Color.white);
	}
	
	public LoginEtudiant() {
		//Debut entete
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 702, 450);
		contentPane = new JPanel();
		contentPane.setBackground(UIManager.getColor("Button.highlight"));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(238, 238, 238));
		panel.setBounds(0, 0, 299, 423);
		contentPane.add(panel);
		panel.setLayout(null);
		
		Semail= new JTextField();
		Semail.addFocusListener(new FocusAdapter() {
			@Override
			public void focusGained(FocusEvent e) {
				if(Semail.getText().equals("Votre Email institutionnel")) {
					Semail.setText(null);
					Semail.requestFocus();
					removePlaceholderStyle(Semail);
				}
			}
			@Override
			public void focusLost(FocusEvent e) {
				if(Semail.getText().length()==0) {
					Semail.setText("Votre Email institutionnel");
				}
			}
		});
		Semail.setText("Votre Email institutionnel");
		Semail.setFont(new Font("Times New Roman", Font.PLAIN, 12));
		Semail.setForeground(new Color(255, 255, 255));
		Semail.setBounds(34, 140, 226, 31);
		panel.add(Semail);
		Semail.setBackground(new Color(0, 51, 102));
		Semail.setColumns(10);
		addPlaceholderStyle(Semail);
		
		Sapoge = new JTextField();
		Sapoge.addFocusListener(new FocusAdapter() {
			@Override
			public void focusGained(FocusEvent e) {
				if(Sapoge.getText().equals("Votre code Appogé")) {
					Sapoge.setText(null);
					Sapoge.requestFocus();
					removePlaceholderStyle(Sapoge);
				}
			}
			@Override
			public void focusLost(FocusEvent e) {
				if(Sapoge.getText().length()==0) {
					Sapoge.setText("Votre code Appogé");
				}
			}
		});
		Sapoge.setText("Votre code Appog\u00E9");
		Sapoge.setFont(new Font("Times New Roman", Font.PLAIN, 12));
		Sapoge.setForeground(new Color(255, 255, 255));
		Sapoge.setBounds(34, 193, 226, 31);
		panel.add(Sapoge);
		Sapoge.setBackground(new Color(0, 51, 102));
		Sapoge.setColumns(10);
		addPlaceholderStyle(Sapoge);

		
		CIN = new JTextField();
		CIN.addFocusListener(new FocusAdapter() {
			@Override
			public void focusGained(FocusEvent e) {
				if(CIN.getText().equals("Votre CIN")) {
					CIN.setText(null);
					CIN.requestFocus();
					removePlaceholderStyle(CIN);
				}
			}
			@Override
			public void focusLost(FocusEvent e) {
				if(CIN.getText().length()==0) {
					CIN.setText("Votre CIN");
				}
			}
		});
		CIN.setText("Votre CIN");
		CIN.setForeground(Color.WHITE);
		CIN.setFont(new Font("Times New Roman", Font.PLAIN, 12));
		CIN.setColumns(10);
		CIN.setBackground(new Color(0, 51, 102));
		CIN.setBounds(34, 246, 226, 31);
		panel.add(CIN);
		addPlaceholderStyle(CIN);

		
		JButton btnValider = new JButton("Valider");
		btnValider.setBounds(93, 350, 100, 31);
		panel.add(btnValider);
		btnValider.setBackground(new Color(255, 255, 255));
		btnValider.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				Email = Semail.getText().toString();
				Apogee = Sapoge.getText().toString();
				cin = CIN.getText().toString();
				
				//la methde s'authentifier
				if (Email.equals("")||Email.equals("Votre Email institutionnel")) {
					JOptionPane.showMessageDialog(null, "Veuillez entrer votre email !");
				}
				else if (Apogee.equals("")||Apogee.equals("Votre code Appogé")) {
					JOptionPane.showMessageDialog(null, "Veuillez entrer votre Code appogé !");
				}
				else if (cin.equals("")||cin.equals("Votre CIN")) {
					JOptionPane.showMessageDialog(null, "Veuillez entrer CIN !");
				}
				else if (AttestationChoisi.equals("Attestation")) {
					JOptionPane.showMessageDialog(null, "Sélectionner une attestation !");
				}
				else {
						int cmt = 0;
								   try {
								        Class.forName("com.mysql.cj.jdbc.Driver");
								    	Connection conn = DriverManager.getConnection("jdbc:mysql://192.168.64.2/SGCN","test","Test");
								        String req = "Select * FROM etudiants";
								        PreparedStatement pstmt = conn.prepareStatement(req);
								        ResultSet rs = pstmt.executeQuery();  
								        while(rs.next()) {
								        	System.out.println("je parcours la bd ");
								        	if(Apogee.equals(rs.getString(1)) && cin.equals(rs.getString(7)) && Email.equals(rs.getString(9))) {
								        		nom=rs.getString(2);
								        		prenom=rs.getString(3);
								        		cin=rs.getString(7);
								        		cmt ++;	
								        	}
								        }
								        if(cmt == 1) 
								        {
								        	System.out.println("vous etes connecter");
								        	Attestation pageAcceuil = new Attestation();
											pageAcceuil.setVisible(true);
											dispose();
								        }
								        else
								        	System.out.println("Email, CIN ou Code Appogée est incorrect ");
							           }
								        catch (Exception ex){
								            System.out.println(ex.getMessage()); 
								        }
					}
				
				
			}
		});
		
		btnValider.setFont(new Font("Zilla Slab", Font.BOLD, 14));
		
		JLabel lblNewLabel_1 = new JLabel("");
		lblNewLabel_1.setBounds(10, 0, 266, 98);
		panel.add(lblNewLabel_1);
		lblNewLabel_1.setIcon(new ImageIcon("/Users/macamara/eclipse-workspace/SGNC/images/unnamed.png"));
		
		textField = new JTextField();
		textField.setForeground(new Color(238, 238, 238));
		textField.setFont(new Font("Times New Roman", Font.PLAIN, 12));
		textField.setColumns(10);
		textField.setBackground(new Color(238, 238, 238));
		textField.setBounds(87, 75, -42, 23);
		panel.add(textField);
		
		//Partie Attestation
		JComboBox Attestation = new JComboBox();
		Attestation.setBounds(34, 297, 226, 31);
		panel.add(Attestation);
		Attestation.setModel(new DefaultComboBoxModel(new String[] {"Attestation", "Relevé Note", "Attestation R\u00E9ussite", "Attestation Scolarité", "Attestation Stage"}));
		Attestation.setFont(new Font("Times New Roman", Font.BOLD, 16));
		
			//listener sur le comboBox Attestation
		Attestation.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				AttestationChoisi = Attestation.getSelectedItem().toString();		
				if(AttestationChoisi.equals("Attestation")) {
					JOptionPane.showMessageDialog(null, "Sélectionner un type d'attestation !");
				}

			}
		});
		//fin partie demande attestation

		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setBounds(160, 146, 554, 420);
		contentPane.add(lblNewLabel);
		lblNewLabel.setIcon(new ImageIcon("/Users/macamara/eclipse-workspace/SGNC/images/students.jpg"));

		
		JTextPane txtpnCetteApplicationVous = new JTextPane();
		txtpnCetteApplicationVous.setFont(new Font("Times New Roman", Font.PLAIN, 12));
		txtpnCetteApplicationVous.setBounds(307, 34, 391, 90);
		contentPane.add(txtpnCetteApplicationVous);
		txtpnCetteApplicationVous.setText(" Enasat\u00E9SMS vous permet de demander vos diff\u00E9rents documents estudiantains, notamment votre :\r\n1)Relev\u00E9 de notes.\r\n2)Attestation de scolarit\u00E9.\r\n3)Attestation de r\u00E9ussite.\r\n");
		
		JLabel lblNewLabel_3_2 = new JLabel("Bienvenue,\r\n\r\n");
		lblNewLabel_3_2.setForeground(new Color(0, 0, 128));
		lblNewLabel_3_2.setFont(new Font("Times New Roman", Font.BOLD, 14));
		lblNewLabel_3_2.setBounds(323, 0, 252, 42);
		contentPane.add(lblNewLabel_3_2);

	}
}
