



def get_email_list(mysheet):
    
    row = mysheet.col_values(1)
    email_list = row[1:]
    return email_list

# email_list = get_email_list(mysheet)
# print("List of email addresses:", email_list)








