import {
  View,
  Text,
  // Image,
  TextInput,
  ScrollView,
  StyleSheet,
  TouchableOpacity,
} from 'react-native';
import React from 'react';

const App: React.FC = () => {
  return (
    <ScrollView style={styles.container}>
      <View style={styles.box}>
        <Text style={styles.text}>Welcome</Text>
        <Text style={styles.text2}>Username</Text>
        <TextInput placeholder="Masukan username anda" style={styles.input} />
        <Text style={styles.text3}>Password</Text>
        <TextInput placeholder="Masukan password anda" style={styles.input2} />
        <TouchableOpacity style={styles.button}>
          <Text style={styles.buttonText}>Sign In</Text>
        </TouchableOpacity>
      </View>
    </ScrollView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 16,
  },
  box: {
    marginBottom: 20,
  },
  text: {
    fontSize: 40,
    fontWeight: 'bold',
    marginBottom: 10,
    // Gradasi warna teks
    color: '#000000', // Warna hijau
    textShadowColor: 'rgba(0, 0, 0, 0.75)',
    textShadowOffset: {width: -1, height: 1},
    textShadowRadius: 10,
  },
  text2: {
    fontSize: 15,
    marginBottom: 10,
    marginTop: 30,
    // Gradasi warna teks
    color: '#000000', // Warna hijau
  },
  // image: {
  //   width: 200,
  //   height: 300,
  //   resizeMode: 'cover',
  //   marginBottom: 10,
  // },
  input: {
    height: 45,
    borderColor: 'gray',
    borderWidth: 1,
    padding: 8,
    borderRadius: 10,
    width: '100%',
  },
  text3: {
    fontSize: 15,
    marginBottom: 10,
    marginTop: 20,
    // Gradasi warna teks
    color: '#000000', // Warna hijau
  },
  // image: {
  //   width: 200,
  //   height: 300,
  //   resizeMode: 'cover',
  //   marginBottom: 10,
  // },
  input2: {
    height: 45,
    borderColor: 'gray',
    borderWidth: 1,
    padding: 8,
    borderRadius: 10,
    width: '100%',
  },

  button: {
    backgroundColor: 'orange', // Warna latar belakang orange
    borderRadius: 5,
    paddingVertical: 10,
    paddingHorizontal: 20,
    alignItems: 'center',
    marginTop: 30,
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
  },
});

export default App;
