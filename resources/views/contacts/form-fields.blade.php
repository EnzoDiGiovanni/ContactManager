@csrf
    <label for="first_name" id="first_name">Prenom :</label>
    <input type="text" name="first_name" placeholder="Enzo" value="{{old('first_name', $contact->first_name)}}">
    @error('first_name')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    

    <label for="name" id="name">Nom :</label>
    <input type="text" name="name" placeholder="Di Giovanni" value="{{old('name', $contact->name) }}">
    @error('name')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror

    <label for="email" id="email">Email :</label>
    <input type="email" name="email" placeholder="e.dg@gmail.com" value="{{old('email', $contact->email) }}">
    @error('email')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror

    <label for="entreprise" id="phone">Téléphone :</label>
    <input type="tel" name="phone" placeholder="0123456789" value="{{old('phone', $contact->phone) }}">
    @error('phone')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror

    <label for="entreprise" id="entreprise">Entreprise :</label>
    <input type="text" name="entreprise" placeholder="Eiffage" value="{{old('entreprise', $contact->entreprise) }}">
    @error('entreprise')
    <p class="alert alert-danger">{{ $message }}</p>
    @enderror

    <button type="submit">Créer / Modifier un contact</button>
