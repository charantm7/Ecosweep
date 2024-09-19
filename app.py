from flask import Flask,render_template,url_for,redirect,request

app = Flask(__name__)



@app.route('/')
@app.route('/home')
def home():
    return render_template('ecosweep.html')

@app.route('/raise')
def raise_complaint():
    return render_template('raise_complaint.html')

@app.route('/submit_complaint')
def submit():
    return render_template('view_complaints.html')


if __name__ == '__main__':
    app.run(debug=False,host='0.0.0.0')